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
// $Id: global_success.tpl 53200 2017-03-20 11:19:46Z sdelaporte $
#}<div class="clearfix"></div>
<div class="alert alert-success fade in">
	<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
	{% if (message) %}{{ message }}{% endif %}{% if (message_to_escape) %}{{ message_to_escape|strip_tags|escape('html')|nl2br_if_needed }}{% endif %}{% if (text) %}<p>{{ text }}</p>{% endif %}
</div>
{% if (list_content) %}
<div class="alert alert-success"><ul>{{ list_content }}</ul></div>
{% endif %}