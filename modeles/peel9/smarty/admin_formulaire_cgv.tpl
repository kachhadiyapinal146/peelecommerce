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
// $Id: admin_formulaire_cgv.tpl 53676 2017-04-25 14:51:39Z sdelaporte $
*}<form class="entryform form-inline" role="form" method="post" action="{$action|escape:'html'}" enctype="multipart/form-data">
	{$form_token}
	<input type="hidden" name="mode" value="{$mode|str_form_value}" />
	<input type="hidden" name="id" value="{$id|str_form_value}" />
	<div class="entete">{$STR_ADMIN_CGV_FORM_EXPLAIN}</div>
	<table class="main_table">
		<tr>
			<td class="title_label">{$STR_ADMIN_WEBSITE}{$STR_BEFORE_TWO_POINTS}: </td>
			<td>
				<select class="form-control" name="site_id">
					{$site_id_select_options}
				</select>
			</td>
		</tr>
		{if !empty({$site_country_checkboxes})}
		<tr>
			<td class="title_label">{$STR_ADMIN_SITE_COUNTRY}{$STR_BEFORE_TWO_POINTS}:</td>
			<td>
				{$site_country_checkboxes}
			</td>
		</tr>
		{/if}
		{foreach $langs as $l}
		<tr><td colspan="2" class="bloc"><h2>{$STR_ADMIN_LANGUAGES_SECTION_HEADER} - {$lang_names[$l.lng]|upper}</h2></td></tr>
		<tr>
			<td colspan="2"><b>{$STR_ADMIN_TITLE} *</b>{$STR_BEFORE_TWO_POINTS}:
				{$l.error}
			</td>
		</tr>
		<tr>
			<td colspan="2"><input style="width:100%" type="text" class="form-control" name="titre_{$l.lng}" size="50" value="{$l.titre|str_form_value}" /></td>
		</tr>
		<tr>
			<td class="title_label" colspan="2">{$STR_ADMIN_CGV_TEXT}{$STR_BEFORE_TWO_POINTS}:</td>
		</tr>
		<tr>
			<td colspan="2">{$l.texte_te}</td>
		</tr>
		{/foreach}
		<tr>
			<td class="center" colspan="2"><p><input class="btn btn-primary" type="submit" value="{$normal_bouton|str_form_value}" /></p></td>
		</tr>
	</table>
</form>