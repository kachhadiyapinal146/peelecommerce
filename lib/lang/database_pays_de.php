<?php
// This file should be in UTF8 without BOM - Accents examples: éèê
// +----------------------------------------------------------------------+
// | Copyright (c) 2004-2012 Advisto SAS, service PEEL - contact@peel.fr  |
// +----------------------------------------------------------------------+
// | This file is part of PEEL Shopping 9.0.0, which is subject to an	  |
// | opensource GPL license: you are allowed to customize the code		  |
// | for your own needs, but must keep your changes under GPL			  |
// | More information: https://www.peel.fr/lire/licence-gpl-70.html		  |
// +----------------------------------------------------------------------+
// | Author: Advisto SAS, RCS 479 205 452, France, https://www.peel.fr/	  |
// +----------------------------------------------------------------------+
// $Id: database_pays_de.php 55325 2017-11-30 10:47:17Z sdelaporte $

if (!defined("IN_PEEL")) {
	die();
}

// The keys shall have quotes so that they are correcly treated by Transifex : write  "1" => ... and not 1 => ...
// Les clés doivent avoir des guillemets pour que ce soit traité correctement par Transifex : indiquez "1" => ... et non pas 1 => ...

$peel_pays["pays"] = array(
  "FRA" => "Frankreich",
  "AFG" => "Afghanistan",
  "ZAF" => "Südafrika",
  "ALB" => "Albanien",
  "DZA" => "Algerien",
  "DEU" => "Deutschland",
  "SAU" => "Saudi-Arabien",
  "ARG" => "Argentinien",
  "AUS" => "Australien",
  "AUT" => "Österreich",
  "BEL" => "Belgien",
  "BRA" => "Brasilien",
  "BGR" => "Bulgarien",
  "CAN" => "Kanada",
  "CHL" => "Chile",
  "CHN" => "China (Volksrepublik)",
  "COL" => "Kolumbien",
  "KOR" => "Südkorea",
  "CRI" => "Costa Rica",
  "HRV" => "Kroatien",
  "DNK" => "Dänemark",
  "EGY" => "Ägypten",
  "ARE" => "Vereinigte Arabische Emirate",
  "ECU" => "Ecuador",
  "USA" => "USA",
  "SLV" => "El Salvador",
  "ESP" => "Spanien",
  "FIN" => "Finnland",
  "GRC" => "Griechenland",
  "HKG" => "Hong Kong",
  "HUN" => "Ungarn",
  "IND" => "Indien",
  "IDN" => "Indonesien",
  "IRL" => "Irland",
  "ISR" => "Israel",
  "ITA" => "Italien",
  "JPN" => "Japan",
  "JOR" => "Jordanien",
  "LBN" => "Lebanon",
  "MYS" => "Malaysia",
  "MAR" => "Marokko",
  "MEX" => "Mexiko",
  "NOK" => "Norwegen",
  "NZL" => "New Zealand",
  "PER" => "Peru",
  "PAK" => "Pakistan",
  "NLD" => "Niederlande",
  "PHL" => "Philippinen",
  "POL" => "Polen",
  "PRI" => "Puerto Rico",
  "PRT" => "Portugal",
  "CZE" => "Tschechische Republik",
  "ROU" => "Rumänien",
  "GBR" => "Großbritannien",
  "RUS" => "Russland",
  "SGP" => "Singapur",
  "SWE" => "Schweden",
  "CHE" => "Schweiz",
  "TWN" => "Taiwan",
  "THA" => "Thailand",
  "TUR" => "Türkei",
  "UKR" => "Ukraine",
  "VEN" => "Venezuela",
  "SRB" => "Serbien",
  "AND" => "Andorra",
  "AGO" => "Angola",
  "AIA" => "Anguilla",
  "ATA" => "Antarktica",
  "ATG" => "Antigua und Barbuda",
  "ARM" => "Armenien",
  "ABW" => "Aruba",
  "AZE" => "Aserbaidschan",
  "BHS" => "Bahamas",
  "BHR" => "Bahrain",
  "BGD" => "Bangladesch",
  "BLR" => "Weißrussland",
  "BLZ" => "Belize",
  "BEN" => "Benin",
  "BMU" => "Bermudas (die)",
  "BTN" => "Bhutan",
  "BOL" => "Bolivien",
  "BIH" => "Bosnien und Herzegowina",
  "BWA" => "Botswana",
  "BVT" => "Norwegen - Bouvet (Insel)",
  "IOT" => "Indischen Ozean Brit. Terr. - Diego Garcia",
  "VGB" => "Jungferninseln",
  "BRN" => "Brunei",
  "BFA" => "Burkina Faso",
  "BDI" => "Burundi",
  "KHM" => "Kambodscha",
  "CMR" => "Kamerun",
  "CPV" => "Cape Verde",
  "CYM" => "Cayman (Inseln)",
  "CAF" => "Zentralafrikanische Republik",
  "TCD" => "Tschad",
  "CXR" => "Australien - Weihnachtsinsel",
  "CCK" => "Australien - Cocos (Keeling) (Inseln)",
  "COM" => "Komoren",
  "COG" => "Kongo",
  "COK" => "Cook (Inseln)",
  "CUB" => "Kuba",
  "CYP" => "Zypern",
  "DJI" => "Djibouti",
  "DMA" => "Dominica",
  "DOM" => "Dominikanische Republik",
  "TLS" => "Osttimor",
  "GNQ" => "Äquatorialguinea",
  "ERI" => "Erythr",
  "EST" => "Estland",
  "ETH" => "Äthiopien",
  "FLK" => "Falklandinseln",
  "FRO" => "Färöer (die)",
  "FJI" => "Fidschiinseln",
  "GUF" => "Französisch-Guayana",
  "PYF" => "Französisch-Polynesien",
  "ATF" => "Terres Australes et Antarctiques Françaises",
  "GAB" => "Gabon",
  "GMB" => "Gambia",
  "GEO" => "Georgien",
  "GHA" => "Ghana",
  "GIB" => "Gibraltar",
  "GRL" => "Grönland",
  "GRD" => "Grenada",
  "GLP" => "Frankreich - Guadeloupe",
  "GUM" => "Guam",
  "GTM" => "Guatemala",
  "GIN" => "Guin",
  "GNB" => "Guinaea-Bissau",
  "HTI" => "Haiti",
  "HMD" => "Australien - Heard- und McDonald-Inseln",
  "HND" => "Honduras",
  "ISL" => "Island",
  "IRN" => "Iran",
  "IRQ" => "Irak",
  "CIV" => "Elfenbeinküste",
  "JAM" => "Jamaika",
  "KAZ" => "Kasachstan",
  "KEN" => "Kenia",
  "KIR" => "Kiribati",
  "KWT" => "Kuwait",
  "KGZ" => "Kirgisistan",
  "LAO" => "Laos",
  "LVA" => "Lettland",
  "LSO" => "Lesotho",
  "LBR" => "Liberia",
  "LBY" => "Libyen",
  "LIE" => "Liechtenstein",
  "LTU" => "Litauen",
  "LUX" => "Luxemburg",
  "MAC" => "Macao",
  "MKD" => "Mazedonien",
  "MDG" => "Madagascar",
  "MWI" => "Malawi",
  "MDV" => "Malediven (Inseln)",
  "MLI" => "Mali",
  "MLT" => "Malta",
  "MHL" => "Marshall (Inseln)",
  "MTQ" => "Frankreich - Martinique",
  "MRT" => "Mauretanien",
  "MUS" => "Maurice",
  "MYT" => "Frankreich - Mayotte",
  "FSM" => "Mikronesien (Föderierte Staaten von)",
  "MDA" => "Moldawien",
  "MCO" => "Monaco",
  "MNG" => "Mongolei",
  "MSR" => "Montserrat",
  "MOZ" => "Mosambik",
  "MMR" => "Myanmar",
  "NAM" => "Namibia",
  "NRU" => "Nauru",
  "NPL" => "Nepal",
  "NCL" => "Frankreich - Neukaledonien",
  "NIC" => "Nicaragua",
  "NER" => "Niger",
  "NGA" => "Nigeria",
  "NIU" => "Niue",
  "NFK" => "Australien - Norfolk (Insel)",
  "MNP" => "Northern Mariana Islands (Inseln)",
  "OMN" => "Oman",
  "PLW" => "Palau",
  "PAN" => "Panama",
  "PNG" => "Papua-Neuguinea",
  "PRY" => "Paraguay",
  "PCN" => "Pitcairn (Insel)",
  "QAT" => "Qatar",
  "REU" => "Frankreich - Reunion",
  "RWA" => "Ruanda",
  "SGS" => "Südgeorgien und die Süd-Sandwichinseln",
  "KNA" => "Saint Kitts und Nevis",
  "LCA" => "Saint Lucia",
  "VCT" => "Saint Vincent und die Grenadinen",
  "WSM" => "Samoa",
  "SMR" => "San Marino (Rep.)",
  "STP" => "Sao Tome und Principe (Republik)",
  "SEN" => "Senegal",
  "SYC" => "Seychellen",
  "SLE" => "Sierra Leone",
  "SVK" => "Slowakei",
  "SVN" => "Slowenien",
  "SOM" => "Somalia",
  "LKA" => "Sri Lanka",
  "SHN" => "St. Helena",
  "SPM" => "Frankreich - Saint-Pierre und Miquelon",
  "SDN" => "Sudan",
  "SUR" => "Suriname",
  "SJM" => "Norwegen - Svalbard und Jan Mayen (Inseln)",
  "SWZ" => "Swasiland",
  "SYR" => "Syrien",
  "TJK" => "Tadschikistan",
  "TZA" => "Tanzania",
  "TGO" => "Togo",
  "TKL" => "Neuseeland - Tokelau",
  "TON" => "Tonga",
  "TTO" => "Trinidad und Tobago",
  "TUN" => "Tunisia",
  "TKM" => "Turkmenistan",
  "TCA" => "Turks and Caicos (Inseln)",
  "TUV" => "Tuvalu",
  "UMI" => "USA: Minor Outlying Islands",
  "UGA" => "Uganda",
  "URY" => "Uruguay",
  "UZB" => "Usbekistan",
  "VUT" => "Vanuatu",
  "VAT" => "Vatikan (Staat)",
  "VNM" => "Vietnam",
  "VIR" => "American Virgin (Inseln)",
  "WLF" => "Frankreich - Wallis und Futuna",
  "ESH" => "Western Sahara",
  "YEM" => "Jemen",
  "COD" => "Kongo (Dem. Rep.).",
  "ZMB" => "Zambia",
  "ZWE" => "Zimbabwe",
  "BRB" => "Barbados",
  "MNE" => "Montenegro"
);

