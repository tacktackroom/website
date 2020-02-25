<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/bontestimonials/views/templates/hook/front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7296568625e4f2683b6f885-61978748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f00412c2926878997a5aa00b7c1dba31cde791f8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/bontestimonials/views/templates/hook/front.tpl',
      1 => 1575667744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7296568625e4f2683b6f885-61978748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'display_caroucel' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683b7a076_07468224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683b7a076_07468224')) {function content_5e4f2683b7a076_07468224($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&$_smarty_tpl->tpl_vars['items']->value) {?>
  <section id="bontestimonials" class="block">
    <h4 class="title_block">


    </h4>
    <ul class="owl-carousel-testimonials owl-carousel owl-theme owl-loaded owl-drag ">
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li <?php if (!$_smarty_tpl->tpl_vars['display_caroucel']->value) {?>class="col-xs-12 col-sm-12"<?php }?>>

          <div class="testimonials-inner">
            <div class="description">
              <?php if (isset($_smarty_tpl->tpl_vars['item']->value['description'])&&$_smarty_tpl->tpl_vars['item']->value['description']) {?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

              <?php }?>
            </div>

            <div class="content-star clearfix">
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
            
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['info'])&&$_smarty_tpl->tpl_vars['item']->value['info']) {?>
              <em><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['info'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</em>
            <?php }?>  
            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'])&&$_smarty_tpl->tpl_vars['item']->value['title']) {?>
              <h5><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h5>
            <?php }?>
          </div>
        </li>
      <?php } ?>
    </ul>
  </section>
<?php }?>
<div id="press_container">
<ul>
	<li>
	<a class="" href="https://www.theplaidhorse.com/2019/11/06/tack-tack-room-making-online-tack-shopping-easy/" target="_blank" title="TTR interview in the plaid horse" alt="The plaid horse interview"> <img src="/img/m/theplaidhorse.png" alt=""> </a>
	</li>
	<li>
	<a class="" href="https://jumpernation.com/four-favorite-consignment-shops-for-equestrians/" target="_blank" title="TTR one of the best online tack consignment" alt="Best online consignment"> <img src="/img/m/jumpernation.png" alt=""> </a>
	</li>		
	<li>
	<a class="" href="http://eqluxe.com/issues/fall-2019-iconic-issue/" title=""> <img src="/img/m/eqluxe.png" target="_blank" title="TTR in eqluxe" alt="Second hand and classy"> </a>
	</li>						
</ul>	
</div><?php }} ?>
