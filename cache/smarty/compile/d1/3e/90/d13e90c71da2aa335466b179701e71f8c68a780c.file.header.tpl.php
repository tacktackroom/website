<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/fbpixel/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3359465605e4f1d2be22897-04520556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13e90c71da2aa335466b179701e71f8c68a780c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/fbpixel/views/templates/hook/header.tpl',
      1 => 1550521355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3359465605e4f1d2be22897-04520556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'sufix' => 0,
    'track_newsletter' => 0,
    'account_created' => 0,
    'fbpixel_product' => 0,
    'product_price' => 0,
    'fbpixel_currency' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2be56463_91756181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2be56463_91756181')) {function content_5e4f1d2be56463_91756181($_smarty_tpl) {?>
<?php if (Tools::getValue('ajax','false')=='false'&&(Tools::getValue('submitMessage','false')=='false'&&Tools::getValue('msgText','false')=='false')&&(Tools::getValue('add_comment','false')=='false'&&Tools::getValue('action')!='add_comment')&&Tools::getValue('criterion','false')=='false'&&(Tools::getValue('controller')!='productscomparison')) {?>

    <script>
        var prefix = '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['prefix']->value);?>
';
        var sufix = '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['sufix']->value);?>
';
        function getURLParameter(url, name) {
            return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
        }

        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '<?php echo Configuration::get('FBPIXEL_ID');?>
');
        

        <?php if (Configuration::get('FBPIXEL_PAGEVIEW')==1) {?>
        fbq('track', 'PageView');
        <?php }?>

        <?php if (Configuration::get('FBPIXEL_LEAD_N')==1&&$_smarty_tpl->tpl_vars['track_newsletter']->value==true) {?>
        fbq('track', 'Lead', {
            content_name: 'newsletter subscription'
        });
        <?php }?>

        <?php if (Configuration::get('FBPIXEL_LEAD')==1) {?>
        <?php if (Tools::getValue('controller')=='product') {?>
        <?php if (Tools::getValue('id_product','false')!='false') {?>
        fbq('track', 'Lead');
        <?php }?>
        <?php }?>
        <?php }?>

        <?php if (Configuration::get('FBPIXEL_REG')==1) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['account_created']->value)) {?>
        fbq('track', "CompleteRegistration");
        <?php }?>
        <?php }?>


        <?php if (Configuration::get('FBPIXEL_DPA')==1) {?>
        <?php if (Configuration::get('FBPIXEL_VCONTENT')==1) {?>
        <?php if (Tools::getValue('id_product','false')!='false'&&$_smarty_tpl->tpl_vars['fbpixel_product']->value!=null) {?>
        <?php $_smarty_tpl->tpl_vars['product_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['fbpixel_product']->value->getPrice(true,@constant('NULL')), null, 0);?>
        $(document).ready(function(){
            var ids=prefix+<?php if (Configuration::get('FBPIXEL_ATTRID')==1) {?>$('#idCombination').val()<?php } elseif (Configuration::get('FBPIXEL_ATTRID')==2) {?><?php echo Tools::getValue('id_product');?>
+'<?php echo Configuration::get('FBPIXEL_SEPSIGN','-');?>
'+$('#idCombination').val()<?php } else { ?><?php echo Tools::getValue('id_product');?>
<?php }?>+sufix;
            fbq('track', 'ViewContent', {
                content_name: '<?php echo strtr($_smarty_tpl->tpl_vars['fbpixel_product']->value->name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                content_ids: [ids],
                content_type: 'product',
                value: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['product_price']->value);?>
,
                currency: '<?php echo $_smarty_tpl->tpl_vars['fbpixel_currency']->value;?>
'
            });
        });
        <?php }?>
        <?php }?>
        <?php } else { ?>
        <?php if (Configuration::get('FBPIXEL_VCONTENT')==1) {?>
        <?php if (Tools::getValue('id_product','false')!='false'&&$_smarty_tpl->tpl_vars['fbpixel_product']->value!=null) {?>
        <?php $_smarty_tpl->tpl_vars['product_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['fbpixel_product']->value->getPrice(true,@constant('NULL')), null, 0);?>
        $(document).ready(function(){
            var ids=prefix+<?php if (Configuration::get('FBPIXEL_ATTRID')==1) {?>$('#idCombination').val()<?php } elseif (Configuration::get('FBPIXEL_ATTRID')==2) {?><?php echo Tools::getValue('id_product');?>
+'<?php echo Configuration::get('FBPIXEL_SEPSIGN','-');?>
'+$('#idCombination').val()<?php } else { ?><?php echo Tools::getValue('id_product');?>
<?php }?>+sufix;
            fbq('track', 'ViewContent', {
                content_name: '<?php echo strtr($_smarty_tpl->tpl_vars['fbpixel_product']->value->name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                value: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['product_price']->value);?>
,
                currency: '<?php echo $_smarty_tpl->tpl_vars['fbpixel_currency']->value;?>
'
            });
        });
        <?php }?>
        <?php }?>
        <?php }?>

        <?php if (Configuration::get('FBPIXEL_INITIATE')==1) {?>
        <?php if (Tools::getValue('controller')=='order'||Tools::getValue('controller')=='orderopc') {?>
        fbq('track', 'InitiateCheckout');
        <?php }?>
        <?php }?>
        <?php if (Configuration::get('FBPIXEL_SEARCH')==1) {?>
        <?php if (Tools::getValue('controller')=='search') {?>
        fbq('track', 'Search');
        <?php }?>
        <?php }?>

        <?php if (Configuration::get('FBPIXEL_DPA')==1) {?>
            <?php if (Configuration::get('FBPIXEL_ADDTOCART')==1) {?>
                $(document).ready(function(){
                    $('<?php echo Configuration::get('FBPIXEL_ATC_L');?>
').click(function(){
                        <?php if (Configuration::get('FBPIXEL_ATTRID')==1) {?>
                        var idp = prefix+getURLParameter($(this).attr('href'),'ipa')+sufix;
                        <?php } elseif (Configuration::get('FBPIXEL_ATTRID')==2) {?>
                        var idp = prefix+getURLParameter($(this).attr('href'),'id_product')+'<?php echo Configuration::get('FBPIXEL_SEPSIGN','-');?>
'+getURLParameter($(this).attr('href'),'ipa')+sufix;
                        <?php } else { ?>
                        var idp = prefix+getURLParameter($(this).attr('href'),'id_product')+sufix;
                        <?php }?>
                        var productPrice = $(this).parents('<?php echo Configuration::get('FBPIXEL_ATC_PC');?>
').find('<?php echo Configuration::get('FBPIXEL_ATC_PP');?>
').html();
                        if (productPrice == undefined) {
                            var productPrice = $(this).parents('li').find('.price').html();
                        }
                        if (productPrice == undefined) {
                            var productPrice = 0.000;
                        }
                        productPrice = productPrice.replace(/[^\d.\,-]/g, '');
                        productPrice = productPrice.replace(',','.');
                        if (productPrice[productPrice.length-1] === ".")
                        {
                            productPrice = productPrice.slice(0, -1);
                        }
                        fbq('track', 'AddToCart', {content_ids: idp, content_type: 'product', value: productPrice, currency: '<?php echo $_smarty_tpl->tpl_vars['fbpixel_currency']->value;?>
'});
                    });
                });
                <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
                    $(document).ready(function(){
                        $('<?php echo Configuration::get('FBPIXEL_ATC_P');?>
').click(function(){
                            var productPagePrice = $(this).parents('body').find('<?php echo Configuration::get('FBPIXEL_ATC_PPP');?>
').html();
                            if (productPagePrice == undefined) {
                                var productPagePrice = 0.000;
                            }
                            productPagePrice = productPagePrice.replace(/[^\d.\,-]/g, '');
                            productPagePrice = productPagePrice.replace(',','.');
                            if (productPagePrice[productPagePrice.length-1] === ".")
                            {
                                productPagePrice = productPagePrice.slice(0, -1);
                            }
                            fbq('track', 'AddToCart', {content_ids: prefix+<?php if (Configuration::get('FBPIXEL_ATTRID')==1) {?>$('#idCombination').val()<?php } elseif (Configuration::get('FBPIXEL_ATTRID')==2) {?><?php echo Tools::getValue('id_product');?>
+'<?php echo Configuration::get('FBPIXEL_SEPSIGN','-');?>
'+$('#idCombination').val()<?php } else { ?><?php echo Tools::getValue('id_product');?>
<?php }?>+sufix, content_type: 'product', value: productPagePrice, currency: '<?php echo $_smarty_tpl->tpl_vars['fbpixel_currency']->value;?>
'});
                        });
                    });
                <?php }?>
            <?php }?>
        <?php } else { ?>
        <?php if (Configuration::get('FBPIXEL_ADDTOCART')==1) {?>
        $(document).ready(function(){
            $('<?php echo Configuration::get('FBPIXEL_ATC_P');?>
, <?php echo Configuration::get('FBPIXEL_ATC_L');?>
').click(function(){
                fbq('track', 'AddToCart');
            });
        });
        <?php }?>
        <?php }?>

        <?php if (Configuration::get('FBPIXEL_WISHLIST')==1) {?>
        $(document).ready(function(){
            $('#wishlist_button_nopop').click(function(){
                fbq('track', 'AddToWishlist');
            });
        });
        <?php }?>
        
    </script>

<?php }?><?php }} ?>
