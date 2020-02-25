<?php /*%%SmartyHeaderCode:3159008815e4f1c53871ef7-71929829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75400c0091e369219a3344c16ff9a96017093ee1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/blocksearch/blocksearch-top.tpl',
      1 => 1525307879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3159008815e4f1c53871ef7-71929829',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1cec5d7017_67620723',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1cec5d7017_67620723')) {function content_5e4f1cec5d7017_67620723($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 clearfix"><form id="searchbox" method="get" action="http://127.0.0.1/ttr/search" > <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" /> <button type="submit" name="submit_search" class="btn btn-default button-search"> <span>Search</span> </button></form></div><?php }} ?>
