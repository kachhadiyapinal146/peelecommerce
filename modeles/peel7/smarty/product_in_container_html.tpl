{* Smarty
// This file should be in UTF8 without BOM - Accents examples: éèê
// +----------------------------------------------------------------------+
// | Copyright (c) 2004-2018 Advisto SAS, service PEEL - contact@peel.fr  |
// +----------------------------------------------------------------------+
// | This file is part of PEEL Shopping 9.0.0, which is subject to an	  |
// | opensource GPL license: you are allowed to customize the code		  |
// | for your own needs, but must keep your changes under GPL			  |
// | More information: https://www.peel.fr/lire/licence-gpl-70.html		  |
// +----------------------------------------------------------------------+
// | Author: Advisto SAS, RCS 479 205 452, France, https://www.peel.fr/	  |
// +----------------------------------------------------------------------+
// $Id: product_in_container_html.tpl 55332 2017-12-01 10:44:06Z sdelaporte $
*}<table class="full_width center product_in_container">
	<tr>
		<td {if isset($on_estimate)}colspan="2"{/if} class="module_product_title">
	{if !empty($thumbnail_promotion)}
			<div class="produit_thumbnail_promotion"><span>-{$promotion}</span></div>
	{/if}
			<a href="{$href|escape:'html'}" title="{$name|str_form_value}">{$name}</a>
		</td>
	</tr>
	{if isset($src)}
	<tr>
		<td {if isset($on_estimate)}colspan="2"{/if} class="module_product_image"><a href="{$href|escape:'html'}" title="{$name|str_form_value}"><img src="{$src|escape:'html'}" alt="{$name|str_form_value}" class="product_image" /></a></td>
	</tr>
	{/if}
	<tr>
		<td><div><a href="{$href|escape:'html'}" class="btn btn-info btn-sm" title="{$name|str_form_value}">{$more_detail_label}</a></div></td>
		{if isset($on_estimate)}
			<td class="right">{$on_estimate}</td>
		{/if}
	</tr>
	{if isset($user)}
	<tr>
		<td>{$user.pseudo}</td>
	</tr>
	{/if}
</table>