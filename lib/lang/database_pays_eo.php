<?php
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
// $Id: database_pays_eo.php 55332 2017-12-01 10:44:06Z sdelaporte $

if (!defined("IN_PEEL")) {
	die();
}

// The keys shall have quotes so that they are correcly treated by Transifex : write  "1" => ... and not 1 => ...
// Les clés doivent avoir des guillemets pour que ce soit traité correctement par Transifex : indiquez "1" => ... et non pas 1 => ...

$peel_pays["pays"] = array(
  "FRA" => "Francio",
  "AFG" => "Afganio",
  "ZAF" => "Sud-Afriko",
  "ALB" => "Albanio",
  "DZA" => "Alĝerio",
  "DEU" => "Germanio",
  "SAU" => "Saud-Arabio",
  "ARG" => "Argentino",
  "AUS" => "Aŭstralio",
  "AUT" => "Aŭstrio",
  "BEL" => "Belgio",
  "BRA" => "Brazilo",
  "BGR" => "Bulgario",
  "CAN" => "Kanado",
  "CHL" => "Ĉilio",
  "CHN" => "Ĉinio (ĉefurbo Pekino)",
  "COL" => "Kolombio",
  "KOR" => "Sud-Koreio",
  "CRI" => "Kostariko",
  "HRV" => "Koratio",
  "DNK" => "Danio",
  "EGY" => "Egiptio",
  "ARE" => "Unuiĝintaj Arabaj Emirlandoj",
  "ECU" => "Ekvadoro",
  "USA" => "Usono",
  "SLV" => "Salvadoro",
  "ESP" => "Hispanio",
  "FIN" => "Finnlando",
  "GRC" => "Grekio",
  "HKG" => "Hongkongo",
  "HUN" => "Hungario",
  "IND" => "Hindio/Barato",
  "IDN" => "Indonezio",
  "IRL" => "Irlando",
  "ISR" => "Israëlo",
  "ITA" => "Italio",
  "JPN" => "Japanio",
  "JOR" => "Jordanio",
  "LBN" => "Libano",
  "MYS" => "Malajzio",
  "MAR" => "Maroko",
  "MEX" => "Meksiko",
  "NOK" => "Norvegio",
  "NZL" => "Nov-Zelando",
  "PER" => "Peruo",
  "PAK" => "Paksitano",
  "NLD" => "Nederlando",
  "PHL" => "Filipinoj",
  "POL" => "Pollando",
  "PRI" => "Porto-Riko",
  "PRT" => "Portugalio",
  "CZE" => "Ĉeĥio",
  "ROU" => "Rumanio",
  "GBR" => "Britio",
  "RUS" => "Rusio",
  "SGP" => "Singapuro",
  "SWE" => "Svedio",
  "CHE" => "Svislando",
  "TWN" => "Tajvano",
  "THA" => "Tajlando",
  "TUR" => "Turkio",
  "UKR" => "Ukrainio",
  "VEN" => "Venezuelo",
  "SRB" => "Serbio",
  "AND" => "Andoro",
  "AGO" => "Angolo",
  "AIA" => "Angvilo",
  "ATA" => "Antarktio",
  "ATG" => "Antigvo-Barbudo",
  "ARM" => "Armenio",
  "ABW" => "Arubo",
  "AZE" => "Azerbajĝano",
  "BHS" => "Bahamoj",
  "BHR" => "Barejno",
  "BGD" => "Bangladeŝo",
  "BLR" => "Belorusio",
  "BLZ" => "Belizo",
  "BEN" => "Benino",
  "BMU" => "Bermudoj",
  "BTN" => "Butano",
  "BOL" => "Bolivio",
  "BIH" => "Bosnio-Hercegovino",
  "BWA" => "Bocvano",
  "BVT" => "Buvet-Insulo (Norvegio)",
  "IOT" => "Diego-Garcio (Britio)",
  "VGB" => "Virgulin-Insuloj",
  "BRN" => "Brunejo",
  "BFA" => "Burkino",
  "BDI" => "Burundo",
  "KHM" => "Kamboĝo",
  "CMR" => "Kameruno",
  "CPV" => "Kabo-Verda",
  "CYM" => "Kajmana Insularo",
  "CAF" => "Centrafriko",
  "TCD" => "Ĉadio",
  "CXR" => "Kristnask-Insulo (Aŭstralio)",
  "CCK" => "Kokosinsuloj (Aŭstralio)",
  "COM" => "Komoroj",
  "COG" => "Kongo",
  "COK" => "Kuk-Insuloj",
  "CUB" => "Kubo",
  "CYP" => "Kipro",
  "DJI" => "Ĝibutio",
  "DMA" => "Dominiko",
  "DOM" => "Domingo",
  "TLS" => "Orienta Timoro",
  "GNQ" => "Gvineo Ekvatora",
  "ERI" => "Eritreo",
  "EST" => "Estonio",
  "ETH" => "Etiopio",
  "FLK" => "Falklandoj-Insuloj",
  "FRO" => "Feroio",
  "FJI" => "Fiĝioj",
  "GUF" => "Franca Gujano",
  "PYF" => "Franca Polinezio",
  "ATF" => "Francaj Sudaj kaj Antarktaj Teritorioj",
  "GAB" => "Gabono",
  "GMB" => "Gambio",
  "GEO" => "Georgio",
  "GHA" => "Ganao",
  "GIB" => "Gibraltaro",
  "GRL" => "Grenlando",
  "GRD" => "Grenado",
  "GLP" => "Franca Gvadelupo",
  "GUM" => "Gvamo",
  "GTM" => "Gvatemalo",
  "GIN" => "Guinea",
  "GNB" => "Gvineo-Bisaŭo",
  "HTI" => "Haitio",
  "HMD" => "Herd-Macdonald-Insuloj",
  "HND" => "Honduro",
  "ISL" => "Islando",
  "IRN" => "Irano",
  "IRQ" => "Irako",
  "CIV" => "Eburbordo",
  "JAM" => "Jamajko",
  "KAZ" => "Kazaĥio",
  "KEN" => "Kenjo",
  "KIR" => "Kiribato",
  "KWT" => "Kuvajto",
  "KGZ" => "Kirgizio",
  "LAO" => "Laoso",
  "LVA" => "Letonio",
  "LSO" => "Lesoto",
  "LBR" => "Liberio",
  "LBY" => "Libio",
  "LIE" => "Liĥtenŝtejno",
  "LTU" => "Litovio",
  "LUX" => "Luksemburgio",
  "MAC" => "Makao",
  "MKD" => "Makedonio",
  "MDG" => "Madagaskaro",
  "MWI" => "Malavio",
  "MDV" => "Maldivoj",
  "MLI" => "Malio",
  "MLT" => "Malto",
  "MHL" => "Marŝalaj Insuloj",
  "MTQ" => "Martiniko (Francio)",
  "MRT" => "Maŭritanio",
  "MUS" => "Maŭricio",
  "MYT" => "Majoto (Francio)",
  "FSM" => "Mikronezio (Federitaj Ŝtatoj de)",
  "MDA" => "Moldavio",
  "MCO" => "Monako",
  "MNG" => "Mongolio",
  "MSR" => "Montserato",
  "MOZ" => "Mozambiko",
  "MMR" => "Birmo",
  "NAM" => "Namibio",
  "NRU" => "Nauro",
  "NPL" => "Nepalo",
  "NCL" => "Nov-Kaledonio (Francio)",
  "NIC" => "Nikaragvo",
  "NER" => "Niĝero",
  "NGA" => "Niĝerio",
  "NIU" => "Niuo",
  "NFK" => "Norfolk-Insuloj (Aŭstralio)",
  "MNP" => "Nord-Marianoj",
  "OMN" => "Omano",
  "PLW" => "Palaŭo",
  "PAN" => "Panamo",
  "PNG" => "Papu-Nov-Gvineo",
  "PRY" => "Paragvajo",
  "PCN" => "Pitkarn-Insuloj",
  "QAT" => "Kataro",
  "REU" => "Reunio (Francio)",
  "RWA" => "Ruando",
  "SGS" => "Sud-Georgio kaj Sud-Sandviĉinsuloj",
  "KNA" => "Sankta-Kito kaj Neviso",
  "LCA" => "Sankta-Lucio",
  "VCT" => "Sankta Vincento kaj la Grenadinoj",
  "WSM" => "Samoo",
  "SMR" => "Sankta Marino",
  "STP" => "Sao-Tomeo k Principeo",
  "SEN" => "Senegalo",
  "SYC" => "Sejŝelo",
  "SLE" => "Sieraleono",
  "SVK" => "Slovakio",
  "SVN" => "Slovenio",
  "SOM" => "Somalio",
  "LKA" => "Srilanko",
  "SHN" => "Sankta Heleno",
  "SPM" => "Sankta-Piero kaj Mikelono (Francio)",
  "SDN" => "Sudano",
  "SUR" => "Surinamo",
  "SJM" => "Svalbardo kaj Janmajeno (Norvegio)",
  "SWZ" => "Svazilando",
  "SYR" => "Sirio",
  "TJK" => "Taĝikio",
  "TZA" => "Tanzanio",
  "TGO" => "Togolando",
  "TKL" => "Tokelaŭo (Nov-Zelando)",
  "TON" => "Tongo",
  "TTO" => "Trinito kaj Tobago",
  "TUN" => "Tunizio",
  "TKM" => "Turkmenio",
  "TCA" => "Turkoj kaj Kajkoj",
  "TUV" => "Tuvaluo",
  "UMI" => "Usonaj foraj insuloj",
  "UGA" => "Ugando",
  "URY" => "Urugvajo",
  "UZB" => "Uzbekio",
  "VUT" => "Vanuatuo",
  "VAT" => "Vatikano",
  "VNM" => "Vjetnamio",
  "VIR" => "Usonaj Virgulininsuloj",
  "WLF" => "Valiso kaj Futuno (Francio)",
  "ESH" => "Okcidenta Saharo",
  "YEM" => "Jemeno",
  "COD" => "Zairio",
  "ZMB" => "Zambio",
  "ZWE" => "Zimbabvo",
  "BRB" => "Barbado",
  "MNE" => "Montenegro"
);

