<div class="block blogModule boxPlain clearfix" id="smartblogsearch">
      <p class='title_block'><a href='{smartblog::GetSmartBlogLink('smartblog_list')}'>{l s="Blog Search" mod="smartblogsearch"}</a></p>
	<div id="sdssearch_block_top" class="block_content">
		<form action="{smartblog::GetSmartBlogLink('smartblog_search')}" method="post" id="searchbox_blog">
		    <input type="hidden" value="0" name="smartblogaction">
			<input type="text" value="" placeholder="Search" name="smartsearch" id="search_query_top_blog" class="search_query form-control ac_input" autocomplete="off">
			<button class="button-search" name="smartblogsubmit" type="submit">
			<span>{l s='Search' mod='smartblogsearch'}</span>
			</button>
		</form>
	</div>
</div>




