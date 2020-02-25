{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{literal}
<SCRIPT type="text/javascript">	
   (function ($) {
       "use strict";
   
   
       /*==================================================================
       [ Focus input ]*/
       $('.input100').each(function(){
           $(this).on('blur', function(){
               if($(this).val().trim() != "") {
                   $(this).addClass('has-val');
               }
               else {
                   $(this).removeClass('has-val');
               }
           })    
       })
     
     
       /*==================================================================
       [ Validate ]*/
       var input = $('.validate-input .input100');
   
       $('.validate-form').on('submit',function(){
           var check = true;
   
           for(var i=0; i<input.length; i++) {
               if(validate(input[i]) == false){
                   showValidate(input[i]);
                   check=false;
               }
           }
   
           return check;
       });
   
   
       $('.validate-form .input100').each(function(){
           $(this).focus(function(){
              hideValidate(this);
           });
       });
   
       function validate (input) {
           if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
               if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                   return false;
               }
           }
           else {
               if($(input).val().trim() == ''){
                   return false;
               }
           }
       }
   
       function showValidate(input) {
           var thisAlert = $(input).parent();
   
           $(thisAlert).addClass('alert-validate');
       }
   
       function hideValidate(input) {
           var thisAlert = $(input).parent();
   
           $(thisAlert).removeClass('alert-validate');
       }
       
       
   }
   )(jQuery);
   
</script>
{/literal}


                  
                  
                  
                  {* Order status *}							
							
						{assign var='Awaiting' value = array('3','33','23')}
						{assign var='Accept' value = array('2','25')}
						{assign var='Cancel' value = array('22','24','30','31','32','26','27','6')}					
						{assign var='Shipped' value = array('4')}
						{assign var='Delivered' value = array('5')}
						{assign var='Cashedout' value = array('28','29')}		
				
{capture name=path}
<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">
{l s='My account'}
</a>
<span class="navigation-pipe">{$navigationPipe}</span>
<span class="navigation_page">{l s='Order history'}</span>
{/capture}
{include file="$tpl_dir./errors.tpl"}
<div class="wk-mp-block">
   {hook h="displayMpMenu"}
</div>
<div class="wk-mp-content effect7">
   <h1 class="page-heading bottom-indent">{l s='Order history'}</h1>
   <div class="wk-mp-right-column wrapper_profile">
      <p class="info-title">{l s='Here are the orders you\'ve placed since your account was created.'}</p>
      {if $slowValidation}
      <p class="alert alert-warning">{l s='If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'}</p>
      {/if}
      <div class="block-center" id="block-history" style="overflow: scroll">
         {if $orders && count($orders)}
          {if (!$isMobile)&&(!Context::getContext()->isTablet())}
         <table id="order-list" class="table table-bordered">
            <thead>
               <tr>
                  <th class="first_item" data-sort-ignore="true">{l s='Order ID'}</th>
{*                   <th class="item" data-sort-ignore="true">{l s='Item'}</th> *}
                  <th class="item">{l s='Date'}</th>
				  <th data-hide="phone" class="item">{l s='Item'}</th>                      
                  <th data-hide="phone" class="item">{l s='Total paid'}</th>
                                
                  {* 					
                  <th data-sort-ignore="true" class="item">{l s='Payment'}</th>
                  *}
                  <th data-sort-ignore="true" class="item">{l s='Shipping'}</th>
                  <th class="item">{l s='Status'}</th>
                  {* 					
                  <th data-sort-ignore="true" class="item">{l s='Invoice'}</th>
                  *}
                  <th data-sort-ignore="true" class="item">{l s='Approval'}</th>
                  <th data-sort-ignore="true" class="item">{l s='See details'}</th>
               </tr>
            </thead>
            <tbody>
               {foreach from=$orders item=order name=myLoop}
				
				{* Tracking. *}	
                  {assign var='track_num' value = Order::getTrackingCode($order.id_order)} 
                  {assign var='track_url' value = Order::getTrackingUrl($order.id_order)} 
                                 
{*               products in order *}                  
                  {assign var='product_name' value = Order::getProductOrder($order.id_order)} 
				               
               <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
                  <td class="history_link bold">
                     {if isset($order.invoice) && $order.invoice && isset($order.virtual) && $order.virtual}
                     <img class="icon" src="{$img_dir}icon/download_product.gif"	alt="{l s='Products to download'}" title="{l s='Products to download'}" />
                     {/if}
                     <a class="color-myaccount" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html':'UTF-8'}');">
{* 								{Order::getUniqReferenceOf($order.id_order)} *}
#{$order.id_order}
	
                     </a>
                  </td>
      
                  <td data-value="{$order.date_add|regex_replace:"/[\-\:\ ]/":""}" class="history_date bold">
                  {dateFormat date=$order.date_add full=0}
                  </td>
                            <td>{$product_name}</td>
                  <td class="history_price" data-value="{$order.total_paid}">
                     <span class="big_number">
                     {displayPrice price=$order.total_paid currency=$order.id_currency no_utf8=false convert=false}
               
                     </span>
                  </td>
                  {* 
                  <td class="history_method">{$order.payment|escape:'html':'UTF-8'} <img style="max-width:80px;transform: none!important" src="https://attractivetackroom.com/img/powered-by-stripe.png"></td>
                  *}
                  <td class="history_method">{if $track_url}<a href="{$track_url}" style="text-decoration: underline; font-weight: bold" target="_blank">Track</a>{/if} 
                  </td>

                  <td data-value="{$order.id_order_state}" class="history_state">
                     {if isset($order.order_state)}
                    <span class="wkbadge label{if in_array($order.current_state, $Shipped)} label-info {elseif in_array($order.current_state, $Accept)} label-success{elseif in_array($order.current_state, $Cancel)} label-warning{elseif in_array($order.current_state, $Delivered)} label-delivered{elseif in_array($order.current_state, $Awaiting)} label-awaiting{else} label-awaiting{/if}">                     {$order.order_state|escape:'html':'UTF-8'}
                     </span>
                     {/if}
                  </td>
                  {*
                  <td class="history_invoice">
                     {if (isset($order.invoice) && $order.invoice && isset($order.invoice_number) && $order.invoice_number) && isset($invoiceAllowed) && $invoiceAllowed == true}
                     <a class="link-button" href="{$link->getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")|escape:'html':'UTF-8'}" title="{l s='Invoice'}" target="_blank">
                     <i class="icon-file-text large"></i>
                     </a>
                     {else}
                     -
                     {/if}
                  </td>
                  *}
                  <td>
                     {if isset($order.id_order_state) && $order.id_order_state == $ps_os_delivered}
                     {if $order.delivered == 1}
                     <span class="wkbadge label label-success">
                     {l s='Accepted'}
                     </span>
                     {elseif $order.delivered == 2}
                     <span class="wkbadge label label-danger">
                     {l s='In dispute'}
                     </span>
                     {else}
                     {**<button class="btn btn-default">
                     {l s='Open dispute'}
                     </button>**}
                     <select class="confirm_delivered_item" data-id_order="{$order.id_order|intval}" data-ref="{$order.reference}">
                        <option value="">{l s='Please confirm your order'}</option>
                        <option value="accepted">{l s='Accept item'}</option>
                        <option value="dispute">{l s='Reject item'}</option>
                     </select>
                     <button type="button" class="valdiateDeliveredItem btn btn-default">{l s='Validate'}</button>
                     {/if}
                     {else}
                     ----
                     {/if}
                  </td>
                  {*	
                  <td class="history_detail">
                     <a class="btn btn-default button mini" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html':'UTF-8'}');">
                     <span>
                     {l s='Details'}<i class="icon-chevron-right right"></i>
                     </span>
                     </a>
                     {if isset($opc) && $opc}
                     <a class="btn btn-default button button-small smaller" href="{$link->getPageLink('order-opc', true, NULL, "submitReorder&id_order={$order.id_order}")|escape:'html':'UTF-8'}" title="{l s='Reorder'}">
                     {else}
                     <a class="btn btn-default button button-small smaller" href="{$link->getPageLink('order', true, NULL, "submitReorder&id_order={$order.id_order}")|escape:'html':'UTF-8'}" title="{l s='Reorder'}">
                     {/if}
                     {if isset($reorderingAllowed) && $reorderingAllowed}
                     <i class="icon-refresh"></i>{l s='Reorder'}
                     {/if}
                     </a>
                  </td>
                  *}
                  <td class="history_link bold">
                     {if isset($order.invoice) && $order.invoice && isset($order.virtual) && $order.virtual}
                     <img class="icon" src="{$img_dir}icon/download_product.gif"	alt="{l s='Products to download'}" title="{l s='Products to download'}" />
                     {/if}
                     <a class="color-myaccount" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html':'UTF-8'}');">
{* 								{Order::getUniqReferenceOf($order.id_order)} *}
  {l s='See details'}
	
                     </a>
                  </td>                  
               </tr>
               {/foreach}
            </tbody>
         </table>
         {/if}
         {if ($isMobile)||(Context::getContext()->isTablet())} 
         <div class="container_history_order_xs" style="display: none">
            {foreach from=$orders item=order name=myLoop}
				
				{* Tracking. *}	
                  {assign var='track_num' value = Order::getTrackingCode($order.id_order)} 
                  {assign var='track_url' value = Order::getTrackingUrl($order.id_order)} 
                                 
{*               products in order *}                  
                  {assign var='product_name' value = Order::getProductOrder($order.id_order)} 
                  
                  
                              
            <div class="order_xs {if $smarty.foreach.myLoop.index % 2}pair{else}impair{/if}">
               <div class="row">
                  <div class="col-xs-12 history_order_xs">
                     <a class="ref_order" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html':'UTF-8'}');">
                    <span class="wkbadge label-primary">Order ID:{$order.id_order}</span>
                     </a>

                     <div class="order_product_desc">				
						{$product_name}
					</div>

                     <div class="date">{dateFormat date=$order.date_add full=0}</div>
                     <div style="text-align: center;width: 100%;font-size: 16px;font-weight: bold">{if $track_url}<a href="{$track_url}" style="text-decoration: underline; font-weight: bold" target="_blank">Track</a>{/if} 
</div>
                     <div class="total"><span class="big_number">{displayPrice price=$order.total_paid currency=$order.id_currency no_utf8=false convert=false}</span></div>
                     <div class="status">
                        {if isset($order.order_state)}
                        <span class="wkbadge label{if in_array($order.current_state, $Shipped)} label-info {elseif in_array($order.current_state, $Accept)} label-success{elseif in_array($order.current_state, $Cancel)} label-warning{elseif in_array($order.current_state, $Delivered)} label-delivered{elseif in_array($order.current_state, $Awaiting)} label-awaiting{else} label-awaiting{/if}">
                        {$order.order_state|escape:'html':'UTF-8'}
                        </span>
                        {/if}
                     </div>
                     <div class="wrapper_delivery_confirmation">
                        {if isset($order.id_order_state) && $order.id_order_state == $ps_os_delivered}
                        {if $order.delivered == 1}
                        <span class="wkbadge label label-success">
                        {l s='Accepted'}
                        </span>
                        {elseif $order.delivered == 2}
                        <span class="wkbadge label label-danger">
                        {l s='In dispute'}
                        </span>
                        {else}
                        {**<button class="btn btn-default">
                        {l s='Open dispute'}
                        </button>**}
                        <select class="confirm_delivered_item" data-id_order="{$order.id_order|intval}" data-ref="{$order.reference}">
                           <option value="">{l s='Please confirm your order'}</option>
                           <option value="accepted">{l s='Accept item'}</option>
                           <option value="dispute">{l s='Reject item'}</option>
                        </select>
                        <button type="button" class="valdiateDeliveredItem btn btn-default">{l s='Validate'}</button>
                        {/if}
                        {else}
                        ----
                        {/if}
                     </div>
                  </div>
                  <div class="col-xs-12" style="float: left;text-align: center">
                     <div>
                        <a href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html':'UTF-8'}');">
                        <i class="material-icons">&#xE8B6;</i>
                        </a>
                     </div>
                     {if isset($order.details.reorder_url)}
                     <div>
                        <a href="{$order.details.reorder_url}" title="{l s='Reorder' d='Shop.Theme.Actions'}">
                        <i class="material-icons">&#xE863;</i>
                        </a>
                     </div>
                     {/if}
                  </div>
               </div>
            </div>
            {/foreach}		
         </div>
         {/if}
         <div id="block-order-detail" class="unvisible" style="padding: 7px">&nbsp;</div>
         {else}
         <p class="alert">{l s='You have not placed any orders.'}</p>
         {/if}
      </div>
   </div>
</div>
{*
<ul class="footer_links clearfix">
   <li>
      <a class="btn btn-default button button-small" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">
      <span>
      <i class="icon-chevron-left"></i> {l s='Back to My Account '}
      </span>
      </a>
   </li>
   <li>
      <a class="btn btn-default button button-small" href="{$base_dir}">
      <span><i class="icon-chevron-left"></i> {l s='Home'}</span>
      </a>
   </li>
</ul>
*}
<div id="ohDisputeModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">{l s='Dispute form'}</h4>
         </div>
         <div class="modal-body">
            <form id="pp_dispute_form">
               <div class="alert alert-danger"></div>
               <div class="form-group wrap-input100 required">            
                  <input type="text" class="is_required validate form-control input100 has-val"  name="order_number" id="order_number" required />
                  <span class="focus-input100c" data-placeholder="{l s='Order number'}"></span>
               </div>
               <div class="form-group wrap-input100 required">
                  <select class="is_required validate form-control input100 has-val" name="item" id="item" required disabled>
                     <option value="">Loading...</option>
                  </select>
                  <span class="focus-input100c" data-placeholder="{l s='Item'}"></span>
               </div>
               <div class="form-group wrap-input100 required">
                  <select class="is_required validate form-control input100 has-val" name="reason" id="reason" required>
                     <option value="">{l s='Choose your reason'}</option>
                     <option value="damaged">{l s='Damaged'}</option>
                     <option value="incorrect_or_missing">{l s='Incorrect or missing'}</option>
                     <option value="not_as_described">{l s='Not as described'}</option>
                     <option value="not_authentic">{l s='Not authentic'}</option>
                  </select>
                  <span class="focus-input100c" data-placeholder="{l s='Reason of the dispute'}"></span>
               </div>
               <div class="form-group wrap-input100">
                  <textarea class="is_required form-control input100 has-val" name="data[comment]" id="comment" rows="10" required></textarea>
                  <span class="focus-input100 focus-input100-b" data-placeholder="{l s='Buyer comment'}"></span>
               </div>
               <div class="button_wrapper">
                  <button id="dispute_btn" class="btn btn-default button button-small" type="button">
                  <span>{l s='Send'}</span>
                  </button>
                  <input type="hidden" id="disput_id_order" />
               </div>
            </form>
         </div>
      </div>
   </div>
</div>