<?php
/*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class OrderDetail extends OrderDetailCore
{
    /**
     * Create an order detail liable to an id_order
     * @param object $order
     * @param object $cart
     * @param array $product
     * @param int $id_order_status
     * @param int $id_order_invoice
     * @param bool $use_taxes set to false if you don't want to use taxes
     */
    protected function create(Order $order, Cart $cart, $product, $id_order_state, $id_order_invoice, $use_taxes = true, $id_warehouse = 0)
    {
        if ($use_taxes) {
            $this->tax_calculator = new TaxCalculator();
        }

        $this->id = null;

        $this->product_id = (int)$product['id_product'];
        $this->product_attribute_id = $product['id_product_attribute'] ? (int)$product['id_product_attribute'] : 0;
        $this->product_name = $product['name'].
            ((isset($product['attributes']) && $product['attributes'] != null) ?
                ' - '.$product['attributes'] : '');

        $this->product_quantity = (int)$product['cart_quantity'];
        $this->product_ean13 = empty($product['ean13']) ? null : pSQL($product['ean13']);
        $this->product_upc = empty($product['upc']) ? null : pSQL($product['upc']);
        $this->product_reference = empty($product['reference']) ? null : pSQL($product['reference']);
        $this->product_supplier_reference = empty($product['supplier_reference']) ? null : pSQL($product['supplier_reference']);
        $this->product_weight = $product['id_product_attribute'] ? (float)$product['weight_attribute'] : (float)$product['weight'];
        $this->id_warehouse = $id_warehouse;

        $product_quantity = (int)Product::getQuantity($this->product_id, $this->product_attribute_id);
        $this->product_quantity_in_stock = ($product_quantity - (int)$product['cart_quantity'] < 0) ?
            $product_quantity : (int)$product['cart_quantity'];

        $this->setVirtualProductInformation($product);
        $this->checkProductStock($product, $id_order_state);

        if ($use_taxes) {
            $this->setProductTax($order, $product);
        }
        $this->setShippingCost($order, $product);
        $this->setDetailProductPrice($order, $cart, $product);

        // Set order invoice id
        $this->id_order_invoice = (int)$id_order_invoice;

        // Set shop id
        $this->id_shop = (int)$product['id_shop'];

        // Add new entry to the table
        $this->save();

        if ($use_taxes) {
            $this->saveTaxCalculator($order);
        }
        unset($this->tax_calculator);

        // Add 1 qty to have more offers
        $today = date('Y-m-d');
        if ($cart->isOffer() && Product::getOfferCount($this->product_id, $today, $order->id_customer, $cart->id)) {
            StockAvailable::updateQuantity($this->product_id, $this->product_attribute_id, 1);
                $objMpProduct = new WkMpSellerProduct($this->product_id);
				$objMpProduct->quantity = $objMpProduct->quantity +1;
                $objMpProduct->save();             
        }
    }
}
