<!-- MODULE Block cart -->

<div id="carttop" class="carttop shopping_cart clearfix{if $PS_CATALOG_MODE} header_user_catalog{/if}">

    <a href="{$link->getPageLink($order_process, true)|escape:'html':'UTF-8'}" title="{l s='View my shopping cart' mod='royblockcart'}" rel="nofollow">
        <span class="carticon">
            {if isset($roythemes.cart_icon) && $roythemes.cart_icon == '6'}<span class="nf_icon"></span>{/if}
            <span class="word">{l s='Cart' mod='royblockcart'}</span>
            <span class="ajax_cart_quantity{if $cart_qties == 0} unvisible{/if}">{$cart_qties}</span>
        </span>
        <span class="cartname">{l s='Shopping Cart' mod='royblockcart'}</span>
        <div class="clearfix"></div>
        <span class="ajax_cart_total{if $cart_qties == 0} unvisible{/if}">
            {if $cart_qties > 0}
                {if $priceDisplay == 1}
                    {assign var='blockcart_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
                    {convertPrice price=$cart->getOrderTotal(false, $blockcart_cart_flag)}
                {else}
                    {assign var='blockcart_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
                    {convertPrice price=$cart->getOrderTotal(true, $blockcart_cart_flag)}
                {/if}
            {/if}
        </span>
        {if $ajax_allowed && isset($blockcart_top) && !$blockcart_top}
            <span class="block_cart_expand{if !isset($colapseExpandStatus) || (isset($colapseExpandStatus) && $colapseExpandStatus eq 'expanded')} unvisible{/if}">&nbsp;</span>
            <span class="block_cart_collapse{if isset($colapseExpandStatus) && $colapseExpandStatus eq 'collapsed'} unvisible{/if}">&nbsp;</span>
        {/if}
    </a>
    {if !$PS_CATALOG_MODE}
        <div class="cart_block block exclusive">
            <div class="block_content">
                <!-- block list of products -->
                <div class="cart_block_list{if isset($blockcart_top) && !$blockcart_top}{if isset($colapseExpandStatus) && $colapseExpandStatus eq 'expanded' || !$ajax_allowed || !isset($colapseExpandStatus)} expanded{else} collapsed unvisible{/if}{/if}">
                    {if $products}
                        <div class="cart-title">
                            <span>
                                {l s='Shopping Cart' mod='royblockcart'}
                            </span>
                        </div>
                        <dl class="products">
                            {foreach from=$products item='product' name='myLoop'}
                                {assign var='productId' value=$product.id_product}
                                {assign var='productAttributeId' value=$product.id_product_attribute}
                                <dt data-id="cart_block_product_{$product.id_product}_{if $product.id_product_attribute}{$product.id_product_attribute}{else}0{/if}_{if $product.id_address_delivery}{$product.id_address_delivery}{else}0{/if}" class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if}">
                                    <div class="cart-img round_image"><a class="cart-images" href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category)|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'cart_default')}" alt="{$product.name|escape:'html':'UTF-8'}" /></a></div>
                                    <div class="cart-info">
                                        <div class="product-name">
                                            {if $product.cart_quantity > 1}<span class="quantity-formated"><span class="quantity">{$product.cart_quantity}</span></span>{/if}<a class="cart_block_product_name" href="{$link->getProductLink($product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}">{$product.name|truncate:70:'...'|escape:'html':'UTF-8'}</a>
                                        </div>
                                        {if isset($product.attributes_small)}
                                            <div class="product-atributes">
                                                <a href="{$link->getProductLink($product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'html':'UTF-8'}" title="{l s='Product detail' mod='royblockcart'}">{$product.attributes_small}</a>
                                            </div>
                                        {/if}
                                        <span class="price">
                                            {if !isset($product.is_gift) || !$product.is_gift}
                                                {if $priceDisplay == $smarty.const.PS_TAX_EXC}{displayWtPrice p="`$product.total`"}{else}{displayWtPrice p="`$product.total_wt`"}{/if}
                                            {else}
                                                {l s='Free!' mod='royblockcart'}
                                            {/if}
                                        </span>
                                    </div>
                                    <span class="remove_link">
                                        {if !isset($customizedDatas.$productId.$productAttributeId) && (!isset($product.is_gift) || !$product.is_gift)}
                                            <a class="ajax_cart_block_remove_link" href="{$link->getPageLink('cart', true, NULL, 'delete=1&amp;id_product={$product.id_product}&amp;ipa={$product.id_product_attribute}&amp;id_address_delivery={$product.id_address_delivery}&amp;token={$static_token}', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='remove this product from my cart' mod='royblockcart'}"></a>
                                        {/if}
                                    </span>
                                </dt>
                                {if isset($product.attributes_small)}
                                    <dd data-id="cart_block_combination_of_{$product.id_product}{if $product.id_product_attribute}_{$product.id_product_attribute}{/if}_{$product.id_address_delivery|intval}" class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if}">
                                {/if}
                                <!-- Customizable datas -->
                                {if isset($customizedDatas.$productId.$productAttributeId[$product.id_address_delivery])}
                                    {if !isset($product.attributes_small)}
                                        <dd data-id="cart_block_combination_of_{$product.id_product}_{if $product.id_product_attribute}{$product.id_product_attribute}{else}0{/if}_{if $product.id_address_delivery}{$product.id_address_delivery}{else}0{/if}" class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if}">
                                    {/if}
                                    <ul class="cart_block_customizations" data-id="customization_{$productId}_{$productAttributeId}">
                                        {foreach from=$customizedDatas.$productId.$productAttributeId[$product.id_address_delivery] key='id_customization' item='customization' name='customizations'}
                                            <li name="customization">
                                                <div data-id="deleteCustomizableProduct_{$id_customization|intval}_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}" class="deleteCustomizableProduct">
                                                    <a class="ajax_cart_block_remove_link" href="{$link->getPageLink("cart", true, NULL, "delete=1&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_customization={$id_customization}&amp;token={$static_token}", true)|escape:"html":"UTF-8"}" rel="nofollow">&nbsp;</a>
                                                </div>
                                                {if isset($customization.datas.$CUSTOMIZE_TEXTFIELD.0)}
                                                    {$customization.datas.$CUSTOMIZE_TEXTFIELD.0.value|replace:"<br />":" "|truncate:48:'...'|escape:'html':'UTF-8'}
                                                {else}
                                                    {l s='Customization #%d:' sprintf=$id_customization|intval mod='royblockcart'}
                                                {/if}
                                            </li>
                                        {/foreach}
                                    </ul>
                                    {if !isset($product.attributes_small)}</dd>{/if}
                                {/if}
                                {if isset($product.attributes_small)}</dd>{/if}
                            {/foreach}
                        </dl>
                        <div class="all_products hidden">
                            <span class="show">{l s='View all products' mod='royblockcart'}</span>
                            <span class="back hidden">{l s='Hide products' mod='royblockcart'}</span>
                        </div>
                    {/if}
                    <p class="cart_block_no_products{if $products} unvisible{/if}">
                        {l s='No products' mod='royblockcart'}
                    </p>
                    {if $discounts|@count > 0}
                        <table class="vouchers"{if $discounts|@count == 0} style="display:none;"{/if}>
                            {foreach from=$discounts item=discount}
                                {if $discount.value_real > 0}
                                    <tr class="bloc_cart_voucher" data-id="bloc_cart_voucher_{$discount.id_discount}">
                                        <td class="quantity">1x</td>
                                        <td class="name" title="{$discount.description}">
                                            {$discount.name|escape:'html':'UTF-8'}
                                        </td>
                                        <td class="price">
                                            -{if $priceDisplay == 1}{convertPrice price=$discount.value_tax_exc}{else}{convertPrice price=$discount.value_real}{/if}
                                        </td>
                                        <td class="delete">
                                            {if strlen($discount.code)}
                                                <a class="delete_voucher" href="{$link->getPageLink("$order_process", true)}?deleteDiscount={$discount.id_discount}" title="{l s='Delete' mod='royblockcart'}" rel="nofollow">
                                                    <i class="icon-remove-sign"></i>
                                                </a>
                                            {/if}
                                        </td>
                                    </tr>
                                {/if}
                            {/foreach}
                        </table>
                    {/if}
                    <div class="cart-prices">
                        <div class="cart-prices-line first-line">
                            <span class="price cart_block_shipping_cost ajax_cart_shipping_cost">
                                {if $shipping_cost_float == 0}
                                    {l s='Free shipping!' mod='royblockcart'}
                                {else}
                                    {$shipping_cost}
                                {/if}
                            </span>
                            <span>
                                {l s='Shipping' mod='royblockcart'}
                            </span>
                        </div>
                        {if $show_wrapping}
                            <div class="cart-prices-line">
                                {assign var='cart_flag' value='Cart::ONLY_WRAPPING'|constant}
                                <span class="price cart_block_wrapping_cost">
                                    {if $priceDisplay == 1}
                                        {convertPrice price=$cart->getOrderTotal(false, $cart_flag)}{else}{convertPrice price=$cart->getOrderTotal(true, $cart_flag)}
                                    {/if}
                                </span>
                                <span>
                                    {l s='Wrapping' mod='royblockcart'}
                                </span>
                           </div>
                        {/if}
                        {if $show_tax && isset($tax_cost)}
                            <div class="cart-prices-line">
                                <span class="price cart_block_tax_cost ajax_cart_tax_cost">{$tax_cost}</span>
                                <span>{l s='Tax' mod='royblockcart'}</span>
                            </div>
                        {/if}
                        <div class="cart-prices-line last-line">
                            <span class="price cart_block_total ajax_block_cart_total">{$total}</span>
                            <span>{l s='Total' mod='royblockcart'}</span>
                        </div>
                        {if $use_taxes && $display_tax_label == 1 && $show_tax}
                            <p>
                            {if $priceDisplay == 0}
                                {l s='Prices are tax included' mod='royblockcart'}
                            {elseif $priceDisplay == 1}
                                {l s='Prices are tax excluded' mod='royblockcart'}
                            {/if}
                            </p>
                        {/if}
                    </div>
                    <p class="cart-buttons">
                        <a id="button_order_cart" class="button_order_cart" href="{$link->getPageLink("$order_process", true)|escape:"html":"UTF-8"}" title="{l s='Check out' mod='royblockcart'}" rel="nofollow">
                            <span>
                                {l s='Check out' mod='royblockcart'}
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- .cart_block -->
    {/if}

</div>

{counter name=active_overlay assign=active_overlay}
{if !$PS_CATALOG_MODE && $active_overlay == 1}
	<div id="layer_cart">
		<div class="round">
			<div class="layer_cart_cart col-xs-12">
				<i class="cart"></i>
				<i class="arrow"></i>
				<i class="done"></i>
			</div>
		</div>
		<div class="button-container">
			<span class="continue btn btn-default button exclusive-medium bright" title="{l s='Continue shopping' mod='royblockcart'}">
				<span>
					{l s='Continue shopping' mod='royblockcart'}
				</span>
			</span>
			<a class="btn btn-default button button-medium bright checkout_button"	href="{$link->getPageLink("$order_process", true)|escape:"html":"UTF-8"}" title="{l s='Proceed to checkout' mod='royblockcart'}" rel="nofollow">
				<span>
					{l s='Proceed to checkout' mod='royblockcart'}
				</span>
			</a>
            <i class="add_close"></i>
		</div>
	</div> <!-- #layer_cart -->
	<div class="layer_cart_overlay"></div>
{/if}
{strip}
{addJsDef CUSTOMIZE_TEXTFIELD=$CUSTOMIZE_TEXTFIELD}
{addJsDef img_dir=$img_dir|addslashes}
{addJsDef generated_date=$smarty.now|intval}

{addJsDefL name=customizationIdMessage}{l s='Customization #' mod='blockcart' js=1}{/addJsDefL}
{addJsDefL name=removingLinkText}{l s='remove this product from my cart' mod='blockcart' js=1}{/addJsDefL}
{addJsDefL name=freeShippingTranslation}{l s='Free shipping!' mod='blockcart' js=1}{/addJsDefL}
{addJsDefL name=freeProductTranslation}{l s='Free!' mod='blockcart' js=1}{/addJsDefL}
{addJsDefL name=delete_txt}{l s='Delete' mod='blockcart' js=1}{/addJsDefL}
{/strip}
<!-- /MODULE Block cart -->
