<!-- Roy payment logos module -->
<div id="roy_payment_logo_block_footer" class="roy_payment_logo_block">
	<a href="{$link->getCMSLink($cms_payement_logo)|escape:'html'}">
        {if isset($pay_paypal) && $pay_paypal}
            <img src="{$img_dir}payments/paypal.png" class="pl_paypal" alt="paypal" width="50" height="30" />
        {/if}
        {if isset($pay_visa) && $pay_visa}
            <img src="{$img_dir}payments/visa.png" class="pl_visa" alt="visa" width="50" height="30" />
        {/if}
        {if isset($pay_visa_el) && $pay_visa_el}
            <img src="{$img_dir}payments/visa-electron.png" class="pl_visa_el" alt="visa electron" width="50" height="30" />
        {/if}
        {if isset($pay_mastercard) && $pay_mastercard}
		<img src="{$img_dir}payments/mastercard.png" class="pl_mastercard" alt="mastercard" width="50" height="30" />
        {/if}
        {if isset($pay_maestro) && $pay_maestro}
		<img src="{$img_dir}payments/maestro.png" class="pl_maestro" alt="maestro" width="50" height="30" />
        {/if}
        {if isset($pay_cirrus) && $pay_cirrus}
		<img src="{$img_dir}payments/cirrus.png" class="pl_cirrus" alt="cirrus" width="50" height="30" />
        {/if}
        {if isset($pay_discover) && $pay_discover}
		<img src="{$img_dir}payments/discover.png" class="pl_discover" alt="discover" width="50" height="30" />
        {/if}
        {if isset($pay_wu) && $pay_wu}
		<img src="{$img_dir}payments/wu.png" class="pl_wu" alt="western union" width="50" height="30" />
        {/if}
        {if isset($pay_mb) && $pay_mb}
		<img src="{$img_dir}payments/mb.png" class="pl_mb" alt="moneybookers" width="50" height="30" />
        {/if}
        {if isset($pay_ae) && $pay_ae}
		<img src="{$img_dir}payments/ae.png" class="pl_ae" alt="ae" width="50" height="30" />
        {/if}
        {if isset($pay_switch) && $pay_switch}
		<img src="{$img_dir}payments/switch.png" class="pl_switch" alt="switch" width="50" height="30" />
        {/if}
        {if isset($pay_solo) && $pay_solo}
		<img src="{$img_dir}payments/solo.png" class="pl_solo" alt="solo" width="50" height="30" />
        {/if}
        {if isset($pay_ach) && $pay_ach}
		<img src="{$img_dir}payments/ach.png" class="pl_ach" alt="ach" width="50" height="30" />
        {/if}
        {if isset($pay_jcb) && $pay_jcb}
		<img src="{$img_dir}payments/jcb.png" class="pl_jcb" alt="jcb" width="50" height="30" />
        {/if}
        {if isset($pay_2co) && $pay_2co}
		<img src="{$img_dir}payments/2co.png" class="pl_2co" alt="2co" width="50" height="30" />
        {/if}
        {if isset($pay_direct) && $pay_direct}
		<img src="{$img_dir}payments/direct.png" class="pl_direct" alt="direct" width="50" height="30" />
        {/if}
	</a>
</div>
<!-- /Roy payment logos module -->