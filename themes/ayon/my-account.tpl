{capture name=path}{l s='My account'}{/capture}
{if isset($account_created)}
<p class="alert alert-success">
   {l s='Your account has been created.'}
</p>
{/if}
<div class="wk-mp-block col-xs-12 col-md-3 col-lg-3">
   {hook h="displayMpMenu"}
</div>
<div class="wk-mp-content col-xs-12 col-md-9 col-lg-9 effect7">
   <div class="row">
      <h1 class="page-heading bottom-indent">
         {l s='Welcome to your community'} {$cookie->customer_firstname}!
      </h1>
      <!---->
      <div class="clearfix"></div>
   
      <div class="col-md-12">
               <div class="dashboard-content">
	               <h2>Give a new chance to your second hand equipment!</h2>   
                  <p>Tack Tack Room it's easy : You upload pictures and a short description of your equipment and it's ready to go ! We make the process simple for buyer and seller. Pick it, Click it and Get it : it becomes a piece of cake to find your futur saddle, tack, boots or your show outfit. We want to create a community where trading equipment is super easy.</p>
            </div>
            
            		<div class="col-sm-4 col-md-4 hiw_img">
	            		<div style="text-align: center">
		            		<img class="rider" src="https://tacktackroom.com/img/cms/shop_great_deals.jpg" alt="horse_rider_male.png">
		            	</div>
		            	<div class="title_seller">
			            	<h5>Shop great deals</h5>
{*
							<div class="my_account">
				            		<a href="https://tacktackroom.com/module/marketplace/addproduct" class="">Sell Now</a>
			            	</div>
*}
			            </div>
			        </div>

<div class="col-sm-4 col-md-4 hiw_img">
	            		<div style="text-align: center">
		            		<img class="rider" src="https://tacktackroom.com/img/cms/list.jpg" alt="horse_rider_male.png">
		            	</div>
		            	<div class="title_seller">
			            	<h5>List in seconds</h5>
							<div class="my_account">
				            		<a href="https://tacktackroom.com/module/marketplace/addproduct" class="">Sell Now</a>
			            	</div>
			            </div>
			        </div>
<div class="col-sm-4 col-md-4 hiw_img">
	            		<div style="text-align: center;line-height: 153px;height:153px">
		            		<a href="https://tacktackroom.com/your-favourite-tack"> <i style="color: #d75a4a;font-size: 80px;    vertical-align: middle;" class="icon-heart"></i></a>
		            	</div>
		            	<div class="title_seller">
			            	<h5>Your feeds</h5>
{*
							<div class="my_account">
				            		<a href="https://tacktackroom.com/module/marketplace/addproduct" class="">Sell Now</a>
			            	</div>
*}
			            </div>
			        </div>
            
{*
            <div class="col-md-7">
               <iframe style="min-height:300px;width: 100%" src="https://www.youtube.com/embed/Kqh0KibyVZY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
            </div>
*}
      </div>
      <!--col-md-12-->
 <!-- Load Facebook SDK for JavaScript -->

<div class="share_ttr">
	<a href="https://www.facebook.com/sharer/sharer.php?u={if isset($shop_link)}{$shop_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'shopstore', ['mp_shop_name' => $name_shop|escape:'html':'UTF-8'])|escape:'html':'UTF-8'}{/if}" target="_blank">
	  Share your tack room on Facebook
	</a>
</div>
      <div class="clearfix"></div>
</div>
<ul class="footer_links clearfix">
   <li><a class="btn btn-default button button-mdall" href="{$base_dir}" title="{l s='Home'}"><span><i class="icon-chevron-left"></i> {l s='Home'}</span></a></li>
</ul>