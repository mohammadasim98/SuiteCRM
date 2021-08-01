
{if strlen($fields.account_number.value) <= 0}
{assign var="value" value=$fields.account_number.default_value }
{else}
{assign var="value" value=$fields.account_number.value }
{/if}  
<input type='text' name='{$fields.account_number.name}' 
id='{$fields.account_number.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >