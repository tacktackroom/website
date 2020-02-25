<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/front/mywishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13201846655e4f1d2c830012-24161410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f48ae026d42ab8ed6c9e48d415cff87cbf95709' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/front/mywishlist.tpl',
      1 => 1580936214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13201846655e4f1d2c830012-24161410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'static_token' => 0,
    'advansedwishlist_controller_url' => 0,
    'mywishlist_url' => 0,
    'link' => 0,
    'advansedwishlistis17' => 0,
    'single_mode' => 0,
    'logged' => 0,
    'products_data_list' => 0,
    'product_page_data' => 0,
    'id_customer' => 0,
    'wishlists' => 0,
    'nbProducts' => 0,
    'nb' => 0,
    'n' => 0,
    'wl_custom_font' => 0,
    'favourite_sellers_products' => 0,
    'sellerData' => 0,
    'most_viewed_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c86cb25_81418620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c86cb25_81418620')) {function content_5e4f1d2c86cb25_81418620($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/modifier.date_format.php';
?>
<script>
   var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_dir']->value);?>
';
   var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
   var isLogged = true;
   var advansedwishlist_controller_url = '<?php echo $_smarty_tpl->tpl_vars['advansedwishlist_controller_url']->value;?>
';
   var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
   var url_cart = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ps_shoppingcart','ajax',array(),true), ENT_QUOTES, 'UTF-8', true);?>
";
   <?php if ($_smarty_tpl->tpl_vars['advansedwishlistis17']->value!=1) {?>
       var ps_ws_version = 'advansedwishlistis16';
   <?php } else { ?>
       var ps_ws_version = 'advansedwishlistis17';
   <?php }?> 
   var single_mode = '<?php echo $_smarty_tpl->tpl_vars['single_mode']->value;?>
';
</script>
<script>
   function openFeed(evt, feedName) {
     var i, x, tablinks;
     x = document.getElementsByClassName("feed");
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablink");
     for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace("feed_active", "");
     }
     document.getElementById(feedName).style.display = "block";
     evt.currentTarget.firstElementChild.className += " feed_active";
   }
</script>
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>

<div class="home_products_title"> 
	<a href="https://tacktackroom.com/your-favourite-tack" title="New listing">
		<span>Your feed</span>
		</a>
	<h3 class="undertitle">Only what you <i style="color: #d75a4a" class="icon-heart"></i>  </h3>
</div>
<div id="mywishlist" class="<?php if ($_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1) {?>mywishlist_17<?php } else { ?>mywishlist_16<?php }?>">	

   <div id="nav_feed">
      <a href="javascript:void(0)" onclick="openFeed(event, 'SavedFeed');">
         <div class="feed_active tablink">Saved Search</div>
      </a>
      <a href="javascript:void(0)" onclick="openFeed(event, 'FavouriteFeed');">
         <div class=" tablink">Favorite Item</div>
      </a>
      <a href="javascript:void(0)" onclick="openFeed(event, 'FavouriteSeller');">
         <div class=" tablink">Favorite Seller</div>
      </a>
      <a href="javascript:void(0)" onclick="openFeed(event, 'RecentlyViewed');">
         <div class=" tablink">Recently Viewed</div>
      </a>
   </div>
   <div id="SavedFeed" class="feed" style="display:block">

      <?php if (isset($_smarty_tpl->tpl_vars['products_data_list']->value)&&count($_smarty_tpl->tpl_vars['products_data_list']->value)) {?>
      <?php  $_smarty_tpl->tpl_vars['product_page_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_page_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_data_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_page_data']->key => $_smarty_tpl->tpl_vars['product_page_data']->value) {
$_smarty_tpl->tpl_vars['product_page_data']->_loop = true;
?>
      	<div class="row_feed_<?php echo $_smarty_tpl->tpl_vars['product_page_data']->value['id_pp_feed_collecter'];?>
">
         <div class="clearfix">
            <h3 class="pull-left feed_nmu_<?php echo $_smarty_tpl->tpl_vars['product_page_data']->value['id_pp_feed_collecter'];?>
">
               <span style="
    background-color: white!important;
    padding: 10px;
    border-radius: 5px;font-size: 12px;
float:left
"><?php echo ucfirst($_smarty_tpl->tpl_vars['product_page_data']->value['name']);?>
</span>
               <a class="displayFeedNamePopup" href="javascript:;" 
                  data-id="<?php echo $_smarty_tpl->tpl_vars['product_page_data']->value['id_pp_feed_collecter'];?>
"
                  data-name="<?php echo ucfirst($_smarty_tpl->tpl_vars['product_page_data']->value['name']);?>
"
                  data-frequency="<?php echo $_smarty_tpl->tpl_vars['product_page_data']->value['frequency'];?>
"
                  data-toggle="modal" data-target="#updateFeedNameModal"><i class="fa fa-edit"></i></a>
            </h3>
            <a href="<?php echo $_smarty_tpl->tpl_vars['product_page_data']->value['category_url'];?>
" class="btn view_all pull-right" target="_blank">View all (<?php echo $_smarty_tpl->tpl_vars['product_page_data']->value['products_count'];?>
)</a>
         </div>
         <?php if (isset($_smarty_tpl->tpl_vars['product_page_data']->value['products'])&&$_smarty_tpl->tpl_vars['product_page_data']->value['products']) {?>
         <div class="products-list">
            <div class="col-md-12">
               <div class="row">
                  <?php echo $_smarty_tpl->getSubTemplate ("../../../../../themes/ayon/product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product_page_data']->value['products'],'wscustomsix'=>true), 0);?>

               </div>
            </div>
         </div>
         <?php }?>
      </div>
      <?php } ?>
      <?php } else { ?>
                  <span class="empty_feed"><?php echo smartyTranslate(array('s'=>'You don\'t have any alert yet! To get notification and create a new feed following your criteria, go to a category and add filter(s)!','mod'=>'advansedwishlist'),$_smarty_tpl);?>
 <i style="color: #d75a4a" class="icon-heart"></i>    
      <?php }?>
   </div>
   <div id="FavouriteFeed" class="feed" style="display:none">

      <?php if (intval($_smarty_tpl->tpl_vars['id_customer']->value)!=0) {?>
      <?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
      <div id="block-history" class="block-center hidden">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th class="col-xs-2 col-md-2"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</th>
                  <th class="col-xs-1 col-md-1"><?php echo smartyTranslate(array('s'=>'Qty','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</th>
                  <th class="col-xs-1 col-md-1"><?php echo smartyTranslate(array('s'=>'Viewed','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</th>
                  <th class="col-xs-2 col-md-2"><?php echo smartyTranslate(array('s'=>'Created','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</th>
                  <?php if (!$_smarty_tpl->tpl_vars['single_mode']->value) {?>
                  <th class="col-xs-2 col-md-2"><?php echo smartyTranslate(array('s'=>'Direct Link','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</th>
                  <th class="col-xs-2 col-md-2"><?php echo smartyTranslate(array('s'=>'Default','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</th>
                  <th class="col-xs-2 col-md-2"><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</th>
                  <?php }?>
               </tr>
            </thead>
            <tbody>
               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wishlists']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
               <tr id="wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
">
                  <td class="col-xs-2 col-md-2">
                     <input type="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
" id="pp_wishlist_id" />
                     <a id="get_wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
" href="#" onclick="javascript:event.preventDefault();WishlistManage('ws-block-order-detail', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
');">
                     <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'],30,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                     </a>
                  </td>
                  <td class="col-xs-1 col-md-1">
                     <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
                     <?php  $_smarty_tpl->tpl_vars['nb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nbProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nb']->key => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->_loop = true;
?>
                     <?php if ($_smarty_tpl->tpl_vars['nb']->value['id_wishlist']==$_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']) {?>
                     <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['nb']->value['nbProducts']), null, 0);?>
                     <?php }?>
                     <?php } ?>
                     <?php if ($_smarty_tpl->tpl_vars['n']->value) {?>
                     <?php echo intval($_smarty_tpl->tpl_vars['n']->value);?>

                     <?php } else { ?>
                     0
                     <?php }?>
                  </td>
                  <td class="col-xs-1 col-md-1"><?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['counter']);?>
</td>
                  <td class="col-xs-2 col-md-2"><?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date_add'],"%Y-%m-%d"), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                  <?php if (!$_smarty_tpl->tpl_vars['single_mode']->value) {?>
                  <td class="col-xs-2 col-md-2">
                     <a href="#" onclick="javascript:event.preventDefault();WishlistManage('ws-block-order-detail', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
');">
                     <?php echo smartyTranslate(array('s'=>'View','mod'=>'advansedwishlist'),$_smarty_tpl);?>

                     </a>
                  </td>
                  <td class="col-xs-2 col-md-2 wishlist_default">
                     <?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['default'])&&$_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['default']==1) {?>
                     <p class="is_wish_list_default">
                        <?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value) {?>
                        <span class="jms-heart-1"></span>
                        <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1) {?>
                        <i class="material-icons">assignment_turned_in</i>
                        <?php } else { ?>
                        <i class="icon icon-check-square"></i>
                        <?php }?>
                        <?php }?>
                     </p>
                     <?php } else { ?>
                     <a href="#" onclick="javascript:event.preventDefault();(WishlistDefault('wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
'));">
                     <?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value) {?>
                     <span class="jms-compare-1"></span>
                     <?php } else { ?>
                     <?php if ($_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1) {?>
                     <i class="material-icons">check_box_outline_blank</i>
                     <?php } else { ?>
                     <i class="icon icon-square"></i>
                     <?php }?>
                     <?php }?>
                     </a>
                     <?php }?>
                  </td>
                  <td class="col-xs-2 col-md-2 wishlist_delete">
                     <a class="icon" href="#" onclick="javascript:event.preventDefault();return (WishlistDelete('wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
', '<?php echo smartyTranslate(array('s'=>'Do you really want to delete this wishlist ?','mod'=>'advansedwishlist','js'=>1),$_smarty_tpl);?>
'));">
                     <?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value) {?>
                     <span class="jms-arrows-remove-1"></span>
                     <?php } else { ?>
                     <?php if ($_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1) {?>
                     <i class="material-icons">delete</i>
                     <?php } else { ?>
                     <i class="icon-remove"></i>
                     <?php }?>
                     <?php }?>
                     </a>
                  </td>
                  <?php }?>
               </tr>
               <?php endfor; endif; ?>
            </tbody>
         </table>
      </div>
      <div id="ws-block-order-detail">&nbsp;</div>
      <?php } else { ?>
      <?php if ($_smarty_tpl->tpl_vars['single_mode']->value) {?>
                  <span class="empty_feed"><?php echo smartyTranslate(array('s'=>'No favorite listing yet! Love is free, click on the ','mod'=>'advansedwishlist'),$_smarty_tpl);?>
<i style="color: #d75a4a" class="icon-heart"></i><?php echo smartyTranslate(array('s'=>' to save the first one!','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</span>

      <?php }?>
      <?php }?>
      <?php }?>
   </div>
   <div id="FavouriteSeller" class="feed" style="display:none">

      <?php if (isset($_smarty_tpl->tpl_vars['favourite_sellers_products']->value)&&$_smarty_tpl->tpl_vars['favourite_sellers_products']->value) {?>
      <?php  $_smarty_tpl->tpl_vars['sellerData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sellerData']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favourite_sellers_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sellerData']->key => $_smarty_tpl->tpl_vars['sellerData']->value) {
$_smarty_tpl->tpl_vars['sellerData']->_loop = true;
?>
      <div class="seller_row_<?php echo $_smarty_tpl->tpl_vars['sellerData']->value['id_seller'];?>
">
         <div class="clearfix">
            <h3 class="pull-left">
               <span>Favourite Seller: <?php echo $_smarty_tpl->tpl_vars['sellerData']->value['seller_name'];?>
</span>
               &nbsp;&nbsp;&nbsp;<a class="removeFavSeller" href="javascript:;" 
                  data-id="<?php echo $_smarty_tpl->tpl_vars['sellerData']->value['id_seller'];?>
"><i class="fa fa-trash-o"></i></a>
            </h3>
            <a href="<?php echo $_smarty_tpl->tpl_vars['sellerData']->value['seller_shop'];?>
" class="btn view_all pull-right" target="_blank">View all (<?php echo $_smarty_tpl->tpl_vars['sellerData']->value['products_count'];?>
)</a>
         </div>
         <?php if (isset($_smarty_tpl->tpl_vars['sellerData']->value['products'])&&$_smarty_tpl->tpl_vars['sellerData']->value['products']) {?>
         <div class="products-list">
            <div class="col-md-12">
               <div class="row">
                  <?php echo $_smarty_tpl->getSubTemplate ("../../../../../themes/ayon/product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['sellerData']->value['products'],'wscustomsix'=>true), 0);?>

               </div>
            </div>
         </div>
         <?php }?>
      </div>
      <?php } ?>
      <?php } else { ?>
            <span class="empty_feed"><i style="color: #d75a4a" class="icon-heart"></i> <?php echo smartyTranslate(array('s'=>'No favorite seller yet! To follow your first seller, browse her/his tackroom and click the "Follow" button.','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</span>
      <?php }?>
   </div>
   <div id="RecentlyViewed" class="feed" style="display:none">

      <?php if (isset($_smarty_tpl->tpl_vars['most_viewed_products']->value)&&$_smarty_tpl->tpl_vars['most_viewed_products']->value) {?>
      	<div class="clearfix">

         <a href="<?php echo $_smarty_tpl->tpl_vars['most_viewed_products']->value['category_url'];?>
" class="btn view_all pull-right" target="_blank">View all (<?php echo $_smarty_tpl->tpl_vars['most_viewed_products']->value['products_count'];?>
)</a>
      </div>
	  		<?php if (isset($_smarty_tpl->tpl_vars['most_viewed_products']->value['products'])&&$_smarty_tpl->tpl_vars['most_viewed_products']->value['products']) {?>
	  			<div class="products-list">
         <div class="col-md-12">
            <div class="row">
               <?php echo $_smarty_tpl->getSubTemplate ("../../../../../themes/ayon/product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['most_viewed_products']->value['products'],'wscustomsix'=>true), 0);?>

            </div>
         </div>
      </div>
	  		<?php }?>
	  <?php } else { ?>
            <span class="empty_feed"><i style="color: #d75a4a" class="icon-heart"></i> <?php echo smartyTranslate(array('s'=>'You are not curious!','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</span>
	  		
      <?php }?>
   </div>   
</div>
<?php }?>
<?php }} ?>
