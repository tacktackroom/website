<div class="wishlist">
	<a class="addToWishlist wishlistProd_{$product.id_product|intval}" href="#" data-product-id="{$product.id_product|intval}" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', false, 1); return false;">
		<span>{l s="Wishlist" mod='blockwishlist'}</span>
	</a>
</div>