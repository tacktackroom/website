<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:28
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/roycontactinfo/roycontactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8137959045e4f2684159758-67959893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '863e8f69e9b4bc76993a2b73772908bc628e9de1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/roycontactinfo/roycontactinfo.tpl',
      1 => 1525307878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8137959045e4f2684159758-67959893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roythemes' => 0,
    'roycontactinfos_company' => 0,
    'roycontactinfos_address' => 0,
    'roycontactinfos_address2' => 0,
    'roycontactinfos_phone' => 0,
    'roycontactinfos_phone2' => 0,
    'roycontactinfos_mob' => 0,
    'roycontactinfos_fax' => 0,
    'roycontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f268416c452_55067373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f268416c452_55067373')) {function content_5e4f268416c452_55067373($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Roy contact info -->
<div id="roy_contact_infos" class="footer-block col-xs-12">
	<div>
    <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="3") {?><h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Contact Information','mod'=>'roycontactinfo'),$_smarty_tpl);?>
</h4><?php }?>
        <ul class="block_content">
            <?php if ($_smarty_tpl->tpl_vars['roycontactinfos_company']->value!='') {?>
            	<li>
            		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['roycontactinfos_address']->value!='') {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['roycontactinfos_address2']->value!='') {?>
            	<li>
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_address2']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="7") {?>
            <?php if ($_smarty_tpl->tpl_vars['roycontactinfos_phone']->value!='') {?>
            	<li>
                    <span><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'roycontactinfo'),$_smarty_tpl);?>
</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['roycontactinfos_phone2']->value!='') {?>
            	<li>
                    <span><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'roycontactinfo'),$_smarty_tpl);?>
</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_phone2']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['roycontactinfos_mob']->value!='') {?>
            	<li>
                    <span><?php echo smartyTranslate(array('s'=>'Mobile:','mod'=>'roycontactinfo'),$_smarty_tpl);?>
</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_mob']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['roycontactinfos_fax']->value!='') {?>
            	<li>
                    <span><?php echo smartyTranslate(array('s'=>'Fax:','mod'=>'roycontactinfo'),$_smarty_tpl);?>
</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_fax']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['roycontactinfos_email']->value!='') {?>
            	<li>
                    <span><?php echo smartyTranslate(array('s'=>'Mail:','mod'=>'roycontactinfo'),$_smarty_tpl);?>
</span> <span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['roycontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</div>

<!-- MODULE Roy contact info -->
<?php }} ?>
