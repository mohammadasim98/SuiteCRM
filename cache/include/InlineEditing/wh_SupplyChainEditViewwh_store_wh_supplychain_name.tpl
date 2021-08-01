
<input type="text" name="{$fields.wh_store_wh_supplychain_name.name}" class="sqsEnabled" tabindex="1" id="{$fields.wh_store_wh_supplychain_name.name}" size="" value="{$fields.wh_store_wh_supplychain_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.wh_store_wh_supplychain_name.id_name}" 
	id="{$fields.wh_store_wh_supplychain_name.id_name}" 
	value="{$fields.wh_store_wh_supplychainwh_store_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.wh_store_wh_supplychain_name.name}" id="btn_{$fields.wh_store_wh_supplychain_name.name}" tabindex="1" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
    "{$fields.wh_store_wh_supplychain_name.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":{/literal}"{$fields.wh_store_wh_supplychain_name.id_name}"{literal},"name":{/literal}"{$fields.wh_store_wh_supplychain_name.name}"{literal}}}{/literal}, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.wh_store_wh_supplychain_name.name}" id="btn_clr_{$fields.wh_store_wh_supplychain_name.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.wh_store_wh_supplychain_name.name}', '{$fields.wh_store_wh_supplychain_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.wh_store_wh_supplychain_name.name}']) != 'undefined'",
		enableQS
);
</script>