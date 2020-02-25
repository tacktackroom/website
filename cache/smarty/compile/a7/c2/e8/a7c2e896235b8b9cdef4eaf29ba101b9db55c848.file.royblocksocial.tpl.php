<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:28
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/royblocksocial/royblocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8296579665e4f2684173ad6-94876541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c2e896235b8b9cdef4eaf29ba101b9db55c848' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/royblocksocial/royblocksocial.tpl',
      1 => 1525307878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8296579665e4f2684173ad6-94876541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'instagram_url' => 0,
    'vk_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2684184587_56854202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2684184587_56854202')) {function content_5e4f2684184587_56854202($_smarty_tpl) {?>

<div id="social_block" class="col-xs-12">
    <div class="social_block_container">
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
                <li class="facebook">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
                <li class="twitter">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
                <li class="rss">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
                <li class="youtube">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
                <li class="google-plus">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
                <li class="pinterest">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
                <li class="instagram">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['vk_url']->value!='') {?>
                <li class="vk">
                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vk_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'VK.com','mod'=>'royblocksocial'),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
</div>
<?php }} ?>
