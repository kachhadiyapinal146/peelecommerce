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
// $Id: attributsAdmin_choix_nom.tpl 55332 2017-12-01 10:44:06Z sdelaporte $
*}<table class="main_table">
	<tr>
		<td class="entete">{$STR_MODULE_ATTRIBUTS_ADMIN_SEARCH_TITLE}</td>
	</tr>
	<tr>
		<td>
			<p><b>{$STR_MODULE_ATTRIBUTS_ADMIN_SEARCH_CHOOSE_ATTRIBUTE}{$STR_BEFORE_TWO_POINTS}:</b></font>
				<select class="form-control" name="categorie" onchange="document.location='{$wwwroot_in_admin}/modules/attributs/administrer/attributs.php?mode=liste&amp;attid='+this.options[this.selectedIndex].value">
					<option value="">{$STR_CHOOSE}...</option>
				{foreach $options as $o}
					<option value="{$o.value|str_form_value}"{if $o.issel} selected="selected"{/if}>{$o.name|html_entity_decode_if_needed}</option>
				{/foreach}
				</select> - <a href="{$wwwroot_in_admin}/modules/attributs/administrer/nom_attributs.php">{$STR_MODULE_ATTRIBUTS_ADMIN_SEARCH_UPDATE_LIST}</a>
			</p>
		</td>
	</tr>
</table>	