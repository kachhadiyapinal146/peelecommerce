{# Twig
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
// $Id: compte_login_mini.tpl 53200 2017-03-20 11:19:46Z sdelaporte $
#}
<div id="compte_login_mini" class="{% if location=='header' %}hidden-xs{% elseif location=='footer' %}visible-xs{% endif %}">
	<form class="entryform form-inline" role="form" method="post" action="{{ wwwroot }}/membre.php">
		<table class="module_login">
			<tr>
				<td>{{ email_lbl }}{{ STR_BEFORE_TWO_POINTS }}:</td>
				<td class="email_module_login" colspan="2"><input type="text" class="form-control" name="email" value="{{ email|str_form_value }}" /></td>
			</tr>
			<tr>
				<td>{{ password_lbl }}{{ STR_BEFORE_TWO_POINTS }}:<br />&nbsp;</td>
				<td class="module_login_password"><input type="password" class="form-control" size="32" name="mot_passe" value="{{ password|str_form_value }}" />
					<p><a href="{{ forgot_pass_href|escape('html') }}">{{ forgot_pass_lbl|nl2br_if_needed }}</a></p>
				</td>
			</tr>
			<tr>
				<td class="module_login_submit" colspan="2">{{ TOKEN }}<input type="submit" value="{{ STR_LOGIN|str_form_value }}" class="btn btn-success" /></td>
			</tr>
			<tr>
				<td class="center" style="padding-top:5px;" colspan="2">
					{% if social %}
						{{ social|join('') }}
					{% endif %}
					{% if (enregistrement_lbl) %}
						<div class="divider" role="presentation"></div>
						<p><a href="{{ enregistrement_href|escape('html') }}" class="btn btn-primary">{{ enregistrement_lbl }}</a></p>
					{% endif %}
				</td>
			</tr>
		</table>
	</form>
</div>