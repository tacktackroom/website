<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:26
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/fbloginblock/views/templates/hooks/socialconnectsmp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16547063175e4f2682d15470-65935947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77602c004b69d0fa0aae6794b3e931e34a863b84' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/fbloginblock/views/templates/hooks/socialconnectsmp.tpl',
      1 => 1536164896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16547063175e4f2682d15470-65935947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fbloginblockislogged' => 0,
    'fbloginblockallcon' => 0,
    'prefix_full' => 0,
    'prefix_short' => 0,
    'fbloginblockis_display_gdpr' => 0,
    'fbloginblockredurly' => 0,
    '($_smarty_tpl->tpl_vars[\'prefix_short\']->value).\'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2682d382d3_61508860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2682d382d3_61508860')) {function content_5e4f2682d382d3_61508860($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/modifier.capitalize.php';
?>

<?php if (!$_smarty_tpl->tpl_vars['fbloginblockislogged']->value) {?>
<span id="socialConnectSpm" class="fbloginblock-connects">



    <?php  $_smarty_tpl->tpl_vars['prefix_full'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prefix_full']->_loop = false;
 $_smarty_tpl->tpl_vars['prefix_short'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fbloginblockallcon']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prefix_full']->key => $_smarty_tpl->tpl_vars['prefix_full']->value) {
$_smarty_tpl->tpl_vars['prefix_full']->_loop = true;
 $_smarty_tpl->tpl_vars['prefix_short']->value = $_smarty_tpl->tpl_vars['prefix_full']->key;
?>

        <?php $_smarty_tpl->tpl_vars['prefix_full'] = new Smarty_variable($_smarty_tpl->tpl_vars['prefix_full']->value['prefix'], null, 0);?>


        <?php if ($_smarty_tpl->tpl_vars['fbloginblock_chook'.($_smarty_tpl->tpl_vars['prefix_short']->value)]->value=="chook".((string)$_smarty_tpl->tpl_vars['prefix_short']->value)&&$_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'_on']->value==1) {?>

            <a  href="javascript:void(0)"

                    <?php if (is_int($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'chookimg']->value)) {?>
                        class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 custom-social-button-all custom-social-button-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'chookimg']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['prefix_short']->value=="a") {?>
                        onclick="<?php if ($_smarty_tpl->tpl_vars['fbloginblockis_display_gdpr']->value==1) {?>if(!displayGDPR('socialConnectSpm','<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')) return false; else <?php }?>return amazonlogin();" title="Amazon"
                    <?php } elseif ($_smarty_tpl->tpl_vars['prefix_short']->value=="y") {?>
                        onclick="<?php if ($_smarty_tpl->tpl_vars['fbloginblockis_display_gdpr']->value==1) {?>if(!displayGDPR('socialConnectSpm','<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')) return false; <?php }?>redirect_fbloginblock('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockredurly']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
', 'openId');"
                    <?php } else { ?>

                        <?php if (isset($_smarty_tpl->tpl_vars['fbloginblockis_ssl'.($_smarty_tpl->tpl_vars['prefix_short']->value)]->value)&&$_smarty_tpl->tpl_vars['fbloginblockis_ssl'.($_smarty_tpl->tpl_vars['prefix_short']->value)]->value==0) {?>
                            onclick="alert('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockssltxt'.($_smarty_tpl->tpl_vars['prefix_short']->value)]->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')"
                        <?php } elseif ($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'conf']->value==1) {?>
                            onclick="<?php if ($_smarty_tpl->tpl_vars['fbloginblockis_display_gdpr']->value==1) {?>if(!displayGDPR('socialConnectSpm','<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')) return false; <?php }?>redirect_fbloginblock('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockredurl'.($_smarty_tpl->tpl_vars['prefix_short']->value)]->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
', 'login');"
                        <?php } else { ?>
                            onclick="alert('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['prefix_short']->value).'error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')"
                        <?php }?>
                        title="<?php echo smarty_modifier_capitalize(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"

                    <?php }?>
                    >


                <?php if ($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'chookimg']->value==1) {?>
                    <i class="fa fa-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">&nbsp;<?php echo smarty_modifier_capitalize(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</i>
                <?php } elseif ($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'chookimg']->value==2) {?>
                    <i class="fa fa-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'chookimg']->value==3) {?>
                    <i class="fa fa-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">&nbsp;<?php echo smarty_modifier_capitalize(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</i>
                <?php } elseif ($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'chookimg']->value==4) {?>
                    <i class="fa fa-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></i>
                <?php } else { ?>
                    <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblock'.($_smarty_tpl->tpl_vars['prefix_short']->value).'chookimg']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-top-custom" alt="<?php echo smarty_modifier_capitalize(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['prefix_full']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"  />
                <?php }?>

            </a>&nbsp;

        <?php }?>




    <?php } ?>


</span>

<?php }?>




<?php }} ?>
