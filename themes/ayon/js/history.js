/*
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
*/

$(document).ready(function() {
	$('.valdiateDeliveredItem').on('click', function() {
		const confirm_delivered_item = $(this).parent().find('.confirm_delivered_item');
		var delVal = confirm_delivered_item.val(), id_order = parseInt(confirm_delivered_item.attr('data-id_order')), ref_order = confirm_delivered_item.attr('data-ref');

		if (delVal == '') {
			return false;
		}

		if (delVal == 'accepted') {
			updateDeliveryReceptionByBuyer(1, id_order);
			confirm_delivered_item.prop('disabled', true);
			$(this).prop('disabled', true);
		} else {
			// $('#ohDisputeModal #item').html( $('<option/>', {text: 'loading...'})).attr('disabled', true);
			$('#ohDisputeModal #order_number').val(ref_order);
			$('#ohDisputeModal #disput_id_order').val(id_order);
			getItemsByOrder(id_order);
			$('#ohDisputeModal').modal('show');
		}
	});

	$('#ohDisputeModal').hide();

	$('#ohDisputeModal .close').click(function() {
		$('#ohDisputeModal').modal('hide');
	});

	$('#dispute_btn').on('click', function() {
		$('#pp_dispute_form .alert-danger').empty().hide();
		var order_number = $('#order_number').val(), item = $('#item').val(), reason = $('#reason').val(), comment = $('#comment').val(), id_order = $('#disput_id_order').val();

		if (order_number == '' || item == '' || reason == '' || comment == '' || id_order == '') {
			$('#pp_dispute_form .alert-danger').html('<p>Please fill up all fields.</p>').show();
			$('#ohDisputeModal').animate({ scrollTop: 0 }, 'slow');
			return false;
		}

		updateDeliveryReceptionByBuyer(2, id_order);
	});
});

//confirm delivery reception by the buyer.
function updateDeliveryReceptionByBuyer(status, id_order)
{
	var paramString = {
		id_order: id_order,
		action: (parseInt(status) == 1 ? 'ProcessAccepcted' : 'ProcessDispute'),
		ajax: 1
	};

	if (parseInt(status) == 2) {
		paramString.item  = $('#item').val();
		paramString.item_name  = $('#item :selected').text();
		paramString.reason  = $('#reason').val();
		paramString.comment  = $('#comment').val();
		paramString.order_ref  = $('#order_number').val();
	}

	$.ajax({
		type: "POST",
		headers: { "cache-control": "no-cache" },
		url: order_histody_page,
		data: paramString,
		dataType: 'json',
		success: function(res){
			if (paramString.action == 'ProcessDispute') {
				if (res.hasError == true) {
					var error = '';
					for (var err in res.errors) {
						error += res.errors[err];
					}

					$('#pp_dispute_form .alert-danger').html(error).show();
					$('#ohDisputeModal').animate({ scrollTop: 0 }, 'slow');
				} else {
					$('#ohDisputeModal').modal('hide');
					window.location.reload();
				}
			}
		}
	});
}

// get items by order
function getItemsByOrder(id_order)
{
	$.ajax({
		type: "POST",
		headers: { "cache-control": "no-cache" },
		url: order_histody_page,
		data: {
			id_order: id_order,
			action: 'GetItemsByOrder',
			ajax: 1
		},
		dataType: 'json',
		success: function(res){
			var items = '', results = res.results;

			$('#ohDisputeModal #item').empty().removeAttr('disabled');

			for (var i = 0; i < results.length; i++) {
				var _res = results[i];
				
				$('#ohDisputeModal #item').append( $('<option/>', {text: _res.product_name, value: _res.id_product}) ).removeAttr('disabled');
			}
		}
	});
}

//show the order-details with ajax
function showOrder(mode, var_content, file)
{
	$.get(
		file,
		((mode === 1) ? {'id_order': var_content, 'ajax': true} : {'id_order_return': var_content, 'ajax': true}),
		function(data)
		{
			$('#block-order-detail').fadeOut('slow', function()
			{
				$(this).html(data);
				$('.footab').footable();
				/* if return is allowed*/
				if ($('#order-detail-content .order_cb').length > 0)
				{
					//return slip : check or uncheck every checkboxes
					$('#order-detail-content th input[type=checkbox]').click(function()
					{
							$('#order-detail-content td input[type=checkbox]').each(function()
							{
								this.checked = $('#order-detail-content th input[type=checkbox]').is(':checked');
								updateOrderLineDisplay(this);
							});
					});
					//return slip : enable or disable 'global' quantity editing
					$('#order-detail-content td input[type=checkbox]').click(function()
					{
						updateOrderLineDisplay(this);
					});
					//return slip : limit quantities
					$('#order-detail-content td .order_qte_input').keyup(function()
					{
						var maxQuantity = parseInt($(this).parent().find('.order_qte_span').text());
						var quantity = parseInt($(this).val());
						if (isNaN($(this).val()) && $(this).val() !== '')
						{
							$(this).val(maxQuantity);
						}
						else
						{
							if (quantity > maxQuantity)
								$(this).val(maxQuantity);
							else if (quantity < 1)
								$(this).val(1);
						}
					});
					// The button to increment the product return value
					$(document).on('click', '.return_quantity_down', function(e){
						e.preventDefault();
						var $input = $(this).parent().parent().find('input');
						var count = parseInt($input.val()) - 1;
						count = count < 1 ? 1 : count;
						$input.val(count);
						$input.change();
					});
					// The button to decrement the product return value
					$(document).on('click', '.return_quantity_up', function(e){
						e.preventDefault();
						var maxQuantity = parseInt($(this).parent().parent().find('.order_qte_span').text());
						var $input = $(this).parent().parent().find('input');
						var count = parseInt($input.val()) + 1;
						count = count > maxQuantity ? maxQuantity : count;
						$input.val(count);
						$input.change();
					});
				}
				//catch the submit event of sendOrderMessage form
				$('form#sendOrderMessage').submit(function(){
					return sendOrderMessage();
			});
			$(this).fadeIn('slow', function() {
				$.scrollTo(this, 1200);
			});
		});
	});
}

function updateOrderLineDisplay(domCheckbox)
{
	var lineQuantitySpan = $(domCheckbox).parent().parent().find('.order_qte_span');
	var lineQuantityInput = $(domCheckbox).parent().parent().find('.order_qte_input');
	var lineQuantityButtons = $(domCheckbox).parent().parent().find('.return_quantity_up, .return_quantity_down');
	if($(domCheckbox).is(':checked'))
	{
		lineQuantitySpan.hide();
		lineQuantityInput.show();
		lineQuantityButtons.show();
	}
	else
	{
		lineQuantityInput.hide();
		lineQuantityButtons.hide();
		lineQuantityInput.val(lineQuantitySpan.text());
		lineQuantitySpan.show();
	}
}

//send a message in relation to the order with ajax
function sendOrderMessage()
{
	paramString = "ajax=true";
	$('#sendOrderMessage').find('input, textarea, select').each(function(){
		paramString += '&' + $(this).attr('name') + '=' + encodeURIComponent($(this).val());
	});

	$.ajax({
		type: "POST",
		headers: { "cache-control": "no-cache" },
		url: $('#sendOrderMessage').attr("action") + '?rand=' + new Date().getTime(),
		data: paramString,
		beforeSend: function(){
			$(".button[name=submitMessage]").prop("disabled", "disabled");
		},
		success: function(msg){
			$('#block-order-detail').fadeOut('slow', function() {
				$(this).html(msg);
				//catch the submit event of sendOrderMessage form
				$('#sendOrderMessage').submit(function(){
					return sendOrderMessage();
				});
				$(this).fadeIn('slow');
	        	$(".button[name=submitMessage]").prop("disabled", false);
			});
		},
		error: function(){
			$(".button[name=submitMessage]").prop("disabled", false);
		}
	});
	return false;
}