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
// $Id: admin_best_sell_products.tpl 53200 2017-03-20 11:19:46Z sdelaporte $
#}
<div class="table-responsive">
	<table class="table admin_best_sell_products">
		{{ links_header_row }}
{% for p in prods %}
		{{ p.tr_rollover }}
			<td>{{ p.lien }}</td>
			<td class="center">{{ p.nombre }}</td>
			<td class="right">{{ p.quantite_totale }}</td>
			<td class="right">{{ p.prix }}</td>
		</tr>
{% endfor %}
	</table>
</div>
{{ links_multipage }}