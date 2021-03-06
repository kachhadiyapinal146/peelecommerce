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
// $Id: ariane.tpl 55930 2018-01-29 08:36:36Z sdelaporte $
#}{% if not (hidden) %}<div property="breadcrumb" class="breadcrumb">
	{% if ariane %}{% if ariane.href %}<span typeof="Breadcrumb"><a href="{{ ariane.href|escape('html') }}" property="url" title="{{ ariane.txt }}"><span property="title" class="hidden">{{ ariane.txt }}</span>{% endif %}<span class="glyphicon glyphicon-home" title="{{ ariane.txt }}"></span>{% if ariane.href %}</a></span>{% endif %}{% endif %}
 	{% if other.txt %}
		{% if ariane %} &gt; {% endif %}
		{% if other.href %}<span typeof="Breadcrumb"><a property="url" href="{{ other.href|escape('html') }}" title="{{ other.txt }}"><span property="title">{% endif %}{{ other.txt }}{% if other.href %}</span></a></span>{% endif %}
	{% endif %}
	{% if buttons %}<div class="breadcrumb_buttons">{{ buttons }}</div><div class="clearfix"></div>{% endif %}
</div>
{% else %}
{# Ne pas utiliser car incompatible avec Google Rich Snippet qui ne prend que les liens a réellement dans le property="breadcrumb" 
<span property="breadcrumb" content="{{ other.txt|strip_tags|trim|escape('html') }}">
	{% if other.txt and other.href %}<span typeof="Breadcrumb"><span property="url" content="{{ other.href|escape('html') }}"><span property="title" content="{{ other.txt|escape('html') }}"></span></span></span>{% elseif (other.hidden) %}{{ other.hidden }}{% endif %}
</span>
#}
{% endif %}