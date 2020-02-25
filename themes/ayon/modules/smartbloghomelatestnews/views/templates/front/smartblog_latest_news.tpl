<div class="block homenews {if isset($roythemes.g_blog_w) && $roythemes.g_blog_w == "1"}container{/if}" data-post-row="{if isset($roythemes.bl_row)}{$roythemes.bl_row}{/if}">
    <div class='sds_title_block'><a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='Latest Posts' mod='smartbloghomelatestnews'}</a>
    <h3 class="undertitle">{l s='There are latest blog posts. You can easy manage it with Smart Blog module' mod='smartbloghomelatestnews'}</h3></div>
    <div class="sdsblog-box-content">
        {if isset($view_data) AND !empty($view_data)}
            {assign var='i' value=1}
            {foreach from=$view_data item=post}
               
                    {assign var="options" value=null}
                    {$options.id_post = $post.id}
                    {$options.id_category = $post.category}
                    {$options.slug = $post.link_rewrite}
                    <div class="sds_blog_post col-xs-12 col-sm-4 col-md-4">
                        <div class="newsblock">
                            <span class="news_module_image_holder">
                                <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}"><span class="icon_more"></span></a>
								<img alt="{$post.title}" class="feat_img_small" src="{$modules_dir}smartblog/images/{$post.post_img}-home-default.jpg">
                            </span>
							<div class="post_title_cont">
                            <div class="news_date"><span class="news_month">{$post.date_added|date_format:"%b"}</span><span class="news_day">{$post.date_added|date_format:"%d"}</span></div>
                            <h4 class="sds_post_title"><a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.title}</a></h4>
							<span class="info_text">{$post.date_added|date_format:"%d"} {$post.date_added|date_format:"%b"} {$post.date_added|date_format:"%Y"} | {l s='In' mod='smartbloghomelatestnews'} <a href="{smartblog::GetSmartBlogLink('smartblog_category',$options)}">{$post.cat_name}</a> | {l s='Post views' mod='smartbloghomelatestnews'} <span class="info_value">({$post.viewed})</span></span>
                            </div>
                            <p>
                                {$post.short_description|escape:'htmlall':'UTF-8'|truncate:200}
                            </p>
                            <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}"><span class="read_more">{l s='Read More' mod='smartbloghomelatestnews'}</span></a>
                        </div>
                    </div>
                
                {$i=$i+1}
            {/foreach}

        {/if}
     </div>
</div>