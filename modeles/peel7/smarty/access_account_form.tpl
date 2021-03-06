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
// $Id: access_account_form.tpl 55332 2017-12-01 10:44:06Z sdelaporte $
*}{if !empty($acces_account_txt)}<h1 property="name" class="page_title">{$acces_account_txt}</h1>{/if}
<div class="row">
	<div class="col-md-6">
		<h3>{$new_customer}</h3>
		{$msg_new_customer|nl2br_if_needed}<br />
		<br />
	</div>
	<div class="col-md-6">
		<h3>{$still_customer}</h3>
		{$msg_still_customer|nl2br_if_needed}<p><a class="notice" href="{$pass_perdu_href|escape:'html'}">{$pass_perdu_txt|nl2br_if_needed}</a></p>
		<form class="entryform form-inline" role="form" method="post" action="{$wwwroot}/membre.php">
			<table class="access_account_form">
				<tr>
					<td>{$email_or_pseudo}:</td>
					<td><input type="text" class="form-control" name="email" value="{$email|str_form_value}" autocapitalize="none" /><br />{$email_error}</td>
				</tr>
				<tr>
					<td>{$STR_PASSWORD}:</td>
					<td><input type="password" class="form-control" name="mot_passe" size="32" value="{$password|str_form_value}" autocapitalize="none" /><br />{$password_error}</td>
				</tr>
				<tr>
					<td colspan="2" class="center" style="padding-top:10px">
						<p>{$token}<input type="submit" value="{$login_txt|str_form_value}" class="btn btn-primary" /></p>
					{if !empty($social)}
						<p class="social_link">
							{''|implode:$social}
						</p>
					{/if}
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>