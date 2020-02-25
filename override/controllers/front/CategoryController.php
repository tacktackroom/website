<?php

 class CategoryController extends CategoryControllerCore
 {
    private $hasMostViewed;
    private $hasFavouriteSellers;

    public function initContent()
    {
        $this->hasMostViewed = false;
        $this->hasFavouriteSellers = false;

        if ((int)Tools::getValue('most-viewed')) {
            $this->hasMostViewed = true;
        }

        if ((int)Tools::getValue('favourite-sellers')) {
            $this->hasFavouriteSellers = true;
        }

        parent::initContent();
    }

    public function assignProductList()
    {
        $hook_executed = false;
        
        if (!$this->hasMostViewed && !$this->hasFavouriteSellers) {
            Hook::exec('actionProductListOverride', array(
                'nbProducts'   => &$this->nbProducts,
                'catProducts'  => &$this->cat_products,
                'hookExecuted' => &$hook_executed,
            ));
        }

        if (!(int)$this->n) {
            $this->n = (int)Configuration::get('PS_PRODUCTS_PER_PAGE');
        }

        $this->getMostViewProducts();
        $this->getFavouriteSellerProducts();

        if (!$hook_executed && (!$this->hasMostViewed && !$this->hasFavouriteSellers)) {
            $this->context->smarty->assign('categoryNameComplement', '');
            $this->nbProducts = $this->category->getProducts(null, null, null, $this->orderBy, $this->orderWay, true);
            $this->pagination((int)$this->nbProducts); // Pagination must be call after "getProducts"
            $this->cat_products = $this->category->getProducts($this->context->language->id, (int)$this->p, (int)$this->n, $this->orderBy, $this->orderWay);
        } else {
            $this->pagination($this->nbProducts);
        }

        $this->addColorsToProductList($this->cat_products);

        Hook::exec('actionProductListModifier', array(
            'nb_products'  => &$this->nbProducts,
            'cat_products' => &$this->cat_products,
        ));

        foreach ($this->cat_products as &$product) {
            if (isset($product['id_product_attribute']) && $product['id_product_attribute'] && isset($product['product_attribute_minimal_quantity'])) {
                $product['minimal_quantity'] = $product['product_attribute_minimal_quantity'];
            }
            if (!$product['id_image'] || $product['id_image'] == 'en-default') {
                if ($cover = Product::getCover($product['id_product']) ) {
                    $product['id_image'] = $product['id_product'] .'-'. $cover['id_image'];
                }
            }
        }
        $this->context->smarty->assign('nb_products', $this->nbProducts);
    }

    public function setMedia()
    {
        parent::setMedia();

        $this->addCSS(_THEME_DIR_ .'css/bootstrap_lib/bootstrap.css');

        $customerFeedID = false;
  
        Media::addJsDef([
            'hasFeedId' => $customerFeedID,
            'id_category' => $this->category->id,
            'pp_feeder_url' => $this->context->link->getModuleLink('marketplace', 'pp_feeder'),
        ]);
    }

    private function getMostViewProducts()
    {
        if (!$this->hasMostViewed) {
            return;
        }

        $cookie = $this->context->cookie;
        $productsViewed = (isset($cookie->viewed) && !empty($cookie->viewed)) ? array_slice(array_reverse(explode(',', $cookie->viewed)), 0, Configuration::get('PRODUCTS_VIEWED_NBR')) : [];

        if (count($productsViewed)) {
            $productIds = implode(',', array_map('intval', $productsViewed));

            $this->context->smarty->assign('categoryNameComplement', '');
            $this->nbProducts = $this->category->getProducts(null, null, null, $this->orderBy, $this->orderWay, true, true, false, 1, true, null, $productIds);
            $this->pagination((int)$this->nbProducts); // Pagination must be call after "getProducts"
            $this->cat_products = $this->category->getProducts($this->context->language->id, (int)$this->p, (int)$this->n, $this->orderBy, $this->orderWay, false, true, false, 1, true, null, $productIds);
        }
    }

    private function getFavouriteSellerProducts()
    {
        if (!$this->hasFavouriteSellers) {
            return;
        }

        $favouriteSellers = FavouriteSeller::getFavouriteSellersProducts($this->context->customer->id);

        if ($favouriteSellers) {
            $this->context->smarty->assign('categoryNameComplement', '');
            $this->nbProducts = $this->category->getProducts(null, null, null, $this->orderBy, $this->orderWay, true, true, false, 1, true, null, $favouriteSellers);
            $this->pagination((int)$this->nbProducts); // Pagination must be call after "getProducts"
            $this->cat_products = $this->category->getProducts($this->context->language->id, (int)$this->p, (int)$this->n, $this->orderBy, $this->orderWay, false, true, false, 1, true, null, $favouriteSellers);
        }
    }
 }