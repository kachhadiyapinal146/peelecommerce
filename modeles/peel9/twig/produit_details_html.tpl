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
// Id: produit_details_html.tpl 46754 2015-09-02 08:48:03Z sdelaporte 
#}
<div typeof="Product">
	{% if global_error is defined %}
		<div class="alert alert-danger">
			{{ global_error.txt }}
			{% if global_error.date %}<span>{{ global_error.date }}</span>{% endif %}
		</div>
	{% endif %}
	<div class="product_breadcrumb">
		{{ breadcrumb }}
	</div>
	{% if flash_txt is defined %}
	<div class="alert alert-warning">{{ flash_txt }}</div>
	{% endif %}
	{% if admin is defined %}
		<p class="center"><a href="{{ admin.href|escape('html') }}" class="title_label">{{ admin.modify_txt }}</a></p>
		{% if admin.is_offline %}
			<p style="color: red;">{{ admin.offline_txt }}</p>
		{% endif %}
	{% endif %}
	{% if modify_product_by_owner is defined %}
		<p colspan="6"><a href="{{ modify_product_by_owner.href|escape('html') }}" class="title_label">{{ modify_product_by_owner.label }}</a></p>
	{% endif %}
	
	<div class="col-md-12">
		<h1 property="name" class="titre_produit">{{ product_name }}</h1>
		<div class="row">
			<div class="fp_produit">
				<div class="col-md-5 col-sm-6">
					<div class="fp_image_grande">
						<div class="image_grande" id="slidingProduct{{ product_id }}">
							{% if main_image is defined %}
								{% if main_image.file_type != 'image' %}
									<a href="{{ main_image.href|escape('html') }}" onclick="return(window.open(this.href)?false:true);"><img src="{{ main_image.src }}" alt="{{ product_name|str_form_value }}" width="{{ medium_width }}" height="{{ medium_height }}" /></a>
								{% else %}
									<a id="zoom1" typeof="ImageObject" {{ a_zoom_attributes }} href="{{ main_image.href|escape('html') }}" title="{{ product_name }}" onclick="return false;"><img property="image" id="mainProductImage" class="zoom" src="{{ main_image.src|escape('html') }}" alt="{{ product_name|str_form_value }}" /></a>
								{% endif %}
							{% elseif no_photo_src %}
								<a href="{{ product_href|escape('html') }}"><img src="{{ no_photo_src }}" alt="{{ photo_not_available_alt }}" /></a>
							{% endif %}
						</div>
						{% if product_images is defined %}
							<ul id="files">
							{% for img in product_images %}
								{% if img.is_image %}
								<li id="{{ img.id }}">
									<a {{ img.a_attr }} title="{{ product_name }}"><img src="{{ img.src|escape('html') }}" alt="{{ product_name|str_form_value }}" width="50" /></a>
								</li>
								{% else %}
								<li>
									<a href="{{ img.href|escape('html') }}" onclick="return(window.open(this.href)?false:true);"><img src="{{ img.src|escape('html') }}" alt="{{ product_name|str_form_value }}" width="50" /></a>
								</li>
								{% endif %}
							{% endfor %}
							</ul>
						{% endif %}
						{% if departements_get_bootbox_dialog is defined %}
							{{ departements_get_bootbox_dialog }}
						{% endif %}
						<br />
						{% if display_share_tools_on_product_pages %}
						<div id="product_link_to_modules_container">
									<table class="product_link_to_modules">
									{% if tell_friends is defined %}
									<!-- dire à un ami, avis des internautes -->
										<tr class="picto-tell_friends">
											<td class="img-tell_friends">
												<a href="{{ tell_friends.href|escape('html') }}" class="partage"><img src="{{ tell_friends.src|escape('html') }}" alt="{{ tell_friends.txt }}" /></a>
											</td>
											<td class="txt-tell_friends">
												<a href="{{ tell_friends.href|escape('html') }}" class="title_label partage">{{ tell_friends.txt }}</a>
											</td>
										</tr>
									{% endif %}
									{% if avis is defined %}
										<tr class="picto-avis">
											<td class="img-avis">
												<a href="{{ avis.href|escape('html') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i>
												</a>
											</td>
											<td class="txt-avis">
												<a href="{{ avis.href|escape('html') }}" class="title_label partage">{{ avis.txt }}</a>
											</td>
										</tr>
									{% endif %}
									{% if tous_avis is defined %}
										<tr class="picto-tous_avis">
											<td class="img-tous_avis">
												<a href="{{ tous_avis.href|escape('html') }}"><i class="fa fa-comments" aria-hidden="true"></i>
												</a>
											</td>
											<td class="txt-tous_avis">
												<a href="{{ tous_avis.href|escape('html') }}" class="title_label partage">{{ tous_avis.txt }}</a>
											</td>
										</tr>
										{% if tous_avis.display_opinion_resume_in_product_page %}
											<tr class="picto-tous_avis">
												<td class="img-tous_avis"></td>
												<td class="txtdetail-tous_avis">
													{{ tous_avis.nb_avis }}  {% if tous_avis.nb_avis>1 %} {{ tous_avis.STR_POSTED_OPINIONS|lower }} {% else %} {{ tous_avis.STR_POSTED_OPINION|lower }} {% endif %} / {{ tous_avis.STR_MODULE_AVIS_NOTE|lower }} {% for foo in 1..tous_avis.average_rating %}<img src="{{ tous_avis.star_src|escape('html') }}" alt="" />{% endfor %}
												</td>
											</tr>
										{% endif %}
										{% if add_easy_list %}
											<tr class="picto-tous_avis">
												<td colspan="2" class="txtdetail-tous_avis">
													<a href="{{ add_easy_list.href|escape('html') }}" class="title_label">{{ add_easy_list.txt|escape('html') }}</a>
												</td>
											</tr>
										{% endif %}
									{% endif %}
									{% if pensebete is defined %}
										<tr class="picto-pensebete">
											<td class="img-pensebete">
												<a href="{{ pensebete.href|escape('html') }}" class="title_label"><i class="fa fa-sticky-note" aria-hidden="true"></i>
												</a>
											</td>
											<td class="txt-pensebete">
												<a href="{{ pensebete.href|escape('html') }}" class="title_label partage">{{ pensebete.txt }}</a>
											</td>
										</tr>
									{% endif %}
										<tr class="picto-print">
											<td class="img-print">
												<a href="javascript:window.print()"><i class="fa fa-print" aria-hidden="true"></i>
												</a>
											</td>
											<td class="txt-print">
												<a href="javascript:window.print()" class="title_label partage">{{ print.txt }}</a>
											</td>
										</tr>
									</table>
							{% if addthis_buttons is defined %}
							{{ addthis_buttons }}
							{% endif %}
							{% if display_facebook_like is defined %}
							{{ display_facebook_like }}
							{% endif %}
						</div>
						{% endif %}
					</div> <!-- fin fp_image_grande -->
				</div> <!-- fin col-m-5 image -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					{% if reference is defined %}
						<h4 property="mpn">{{ reference.label }} <span id="reference_{{ product_id }}">{{ reference.txt }}</span></h4>
					{% endif %}
					{% if ean_code is defined %}
						<h4 property="gtin8">{{ ean_code.label }}: {{ ean_code.txt }}</h4>
					{% endif %}
					{% if conditionnement is defined %}
						<p><b>{{ STR_CONDITIONING }}{{ STR_BEFORE_TWO_POINTS }}: </b>{{ conditionnement }}</p>
					{% endif %}
					{% if marque is defined %}
						<hr />
						<h3 property="brand">{{ marque.label }}: <b>{{ marque.txt }}</b></h3>
						<hr />
					{% endif %}
					{% if points is defined %}
						<p>{{ points.label }}: {{ points.txt }}</p>
					{% endif %}
						<div class="description" property="description">
							{% if descriptif %}<p>{{ descriptif }}</p>{% endif %}
							{% if description %}<div>{{ description }}</div>{% endif %}
						</div>
					
					{% if qrcode_image_src %}<div class="qrcode"><img src="{{ qrcode_image_src|escape('html') }}" alt="" /></div>{% endif %}
					{% if barcode_image_src %}<div class="qrcode"><img src="{{ barcode_image_src|escape('html') }}" alt="" /></div>{% endif %}
					
					{% if extra_link %}
						<p class="extra_link"><a href="{{ extra_link }}" onclick="return(window.open(this.href)?false:true);">{{ extra_link }}</a></p>
					{% endif %}
					{% if categorie_sentence_displayed_on_product %}
						<p class="categorie_sentence_displayed_on_product">{{ categorie_sentence_displayed_on_product }}</p>
					{% endif %}
					{% if explanation_table is defined %}
						{{ explanation_table }}
					{% endif %}
				</div> <!-- fin col-md-4 description-->
				<div class="clearfix visible-sm visible-xs"></div>
				<div class="col-md-3 col-sm-6">
					{% if subscribe_trip_form is defined %}
						{{ subscribe_trip_form }}
					{% endif %}
					{% if display_registred_user is defined %}
						{{ display_registred_user }}
					{% endif %}
					{% if check is defined %}
						{{ check }}
					{% elseif critere_stock is defined %}
						{% if product_disable_ad_cart_if_user_not_logged is empty %}
						{{ critere_stock }}
						{% else %}
						<div class="affiche_critere_stock well">
						{{ STR_MSG_NEW_CUSTOMER }}
						</div>
						{% endif %}
					{% elseif on_estimate %}
						<div class="on_estimate well">
							<div class="center">
								<span style="font-size: 20px;">{{ on_estimate.label }}</span><br />
								<form class="entryform form-inline" role="form" method="post" action="{{ on_estimate.action }}">
									<input class="btn btn-primary btn-lg" type="submit" value="{{ on_estimate.contact_us|str_form_value }}">
								</form>
							</div>
						</div>
					{% endif %}
				</div> <!-- fin col-md-3 ajout panier-->
			</div> <!-- fin fp_produit -->
	
	
{% if tabs is defined %}
			<br />
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="tabbable">
					<ul class="nav nav-tabs">
				{% for tab in tabs %}
						<li class="{% if tab.is_current %}active{% endif %}" id="{% if tab.tab_id %}{{ tab.tab_id }}{% endif %}"><a href="#title_{{ tab.index }}" onclick="return false;" data-toggle="tab">{{ tab.title }}</a></li>
				{% endfor %}
					</ul>
					<div class="tab-content">
				{% for tab in tabs %}
						<div class="tab-pane{% if tab.is_current %} active{% endif %}" id="title_{{ tab.index }}">{{ tab.content|html_entity_decode_if_needed }}</div>
				{% endfor %}
					</div>
				</div>
			</div>
{% endif %}
		</div> <!-- fin row -->
	</div> <!-- fin col-md-12 -->
	{% if youtube_code is defined %}
	{{ youtube_code }}
	{% endif %}
</div>
{{ associated_products }}