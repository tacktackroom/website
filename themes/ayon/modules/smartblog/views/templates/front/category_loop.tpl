<div itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" class="sdsarticleCat clearfix">
    <div id="smartblogpost-{$post.id_post}">
    <div class="articleContent">	
         {assign var="options" value=null}
                            {$options.id_post = $post.id_post} 
                            {$options.slug = $post.link_rewrite}
          <a itemprop="url" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" title="{$post.meta_title}" class="imageFeaturedLink">
                    {assign var="activeimgincat" value='0'}
                    {$activeimgincat = $smartshownoimg} 
                    {if ($post.post_img != "no" && $activeimgincat == 0) || $activeimgincat == 1}
              <img itemprop="image" alt="{$post.meta_title}" src="{$modules_dir}/smartblog/images/{$post.post_img}-single-default.jpg" class="imageFeatured">
                    {/if}
          </a>
    </div>
    <div class="sdsarticleHeader">
							<div class="news_date"><span class="news_month">{$post.created|date_format:"%b"}</span><span class="news_day">{$post.created|date_format:"%d"}</span><span class="news_year">{$post.created|date_format:"%Y"}</span></div>	
                            <p class='sdstitle_block'><a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.meta_title}</a></p>
             {assign var="options" value=null}
                        {$options.id_post = $post.id_post}
                        {$options.slug = $post.link_rewrite}
               {assign var="catlink" value=null}
                            {$catlink.id_category = $post.id_category}
                            {$catlink.slug = $post.cat_link_rewrite}
         <span class="info">{l s='Posted' mod='smartblog'} <span>{$post.created|date_format:"%d"} {$post.created|date_format:"%b"} {$post.created|date_format:"%Y"}</span> | <span itemprop="author">{l s='By' mod='smartblog'} {if $smartshowauthor ==1}{if $smartshowauthorstyle != 0}{$post.firstname} {$post.lastname}{else}{$post.lastname} {$post.firstname}{/if}</span>{/if} | <span itemprop="articleSection">{l s='In' mod='smartblog'} <a href="{smartblog::GetSmartBlogLink('smartblog_category',$catlink)}">{if $title_category != ''}{$title_category}{else}{$post.cat_name}{/if}</a></span> | <span class="comment"><a title="{$post.totalcomment} Comments" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}#articleComments">{l s=' Comments' mod='smartblog'} <span class="info_value">({$post.totalcomment})</span></a></span>{if $smartshowviewed ==1} | <span>{l s='Post views' mod='smartblog'} <span class="info_value">({$post.viewed})</span></span>{/if}</span>
	</div>
        <div class="sdsarticle-des">
          <span itemprop="description" class="clearfix">
	           {$post.short_description} ...</span>
        </div>
        <div class="sdsreadMore">
                  {assign var="options" value=null}
                        {$options.id_post = $post.id_post}  
                        {$options.slug = $post.link_rewrite}  
                         <span class="more"><a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="btn btn-default button button-medium r_more">{l s='Read more' mod='smartblog'} <i></i></a></span>
        </div>

   </div>
</div>
