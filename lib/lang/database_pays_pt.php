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
// $Id: database_pays_pt.php 55332 2017-12-01 10:44:06Z sdelaporte $

if (!defined("IN_PEEL")) {
	die();
}

// The keys shall have quotes so that they are correcly treated by Transifex : write  "1" => ... and not 1 => ...
// Les clés doivent avoir des guillemets pour que ce soit traité correctement par Transifex : indiquez "1" => ... et non pas 1 => ...

$peel_pays["pays"] = array(
  "FRA" => "França",
  "AFG" => "Afeganistão",
  "ZAF" => "África do Sul",
  "ALB" => "Albânia",
  "DZA" => "Argélia",
  "DEU" => "Alemanha",
  "SAU" => "Arábia Saudita",
  "ARG" => "Argentina",
  "AUS" => "Austrália",
  "AUT" => "Áustria",
  "BEL" => "Bélgica",
  "BRA" => "Brasil",
  "BGR" => "Bulgária",
  "CAN" => "Canadá",
  "CHL" => "Chile",
  "CHN" => "China (República Popular).",
  "COL" => "Colômbia",
  "KOR" => "Coreia do Sul",
  "CRI" => "Costa Rica",
  "HRV" => "Croácia",
  "DNK" => "Dinamarca",
  "EGY" => "Egito",
  "ARE" => "Emirados Árabes Unidos",
  "ECU" => "Equador",
  "USA" => "Estados Unidos",
  "SLV" => "El Salvador",
  "ESP" => "Espanha",
  "FIN" => "Finlândia",
  "GRC" => "Grécia",
  "HKG" => "Hong Kong",
  "HUN" => "Hungria",
  "IND" => "Índia",
  "IDN" => "Indonésia",
  "IRL" => "Irlanda",
  "ISR" => "Israel",
  "ITA" => "Itália",
  "JPN" => "Japão",
  "JOR" => "Jordan",
  "LBN" => "Líbano",
  "MYS" => "Malásia",
  "MAR" => "Marrocos",
  "MEX" => "México",
  "NOK" => "Noruega",
  "NZL" => "Nova Zelândia",
  "PER" => "Peru",
  "PAK" => "Paquistão",
  "NLD" => "Países Baixos",
  "PHL" => "Filipinas",
  "POL" => "Polônia",
  "PRI" => "Puerto Rico",
  "PRT" => "Portugal",
  "CZE" => "Tcheca (Rep.)",
  "ROU" => "Roménia",
  "GBR" => "Reino Unido (UK)",
  "RUS" => "Rússia",
  "SGP" => "Singapura",
  "SWE" => "Suécia",
  "CHE" => "Suíça",
  "TWN" => "Taiwan",
  "THA" => "Tailândia",
  "TUR" => "Turquia",
  "UKR" => "Ucrânia",
  "VEN" => "Venezuela",
  "SRB" => "Sérvia",
  "AND" => "Andorra",
  "AGO" => "Angola",
  "AIA" => "Anguilla",
  "ATA" => "Antarctica",
  "ATG" => "Antígua e Barbuda",
  "ARM" => "Armênia",
  "ABW" => "Aruba",
  "AZE" => "Azerbaijão",
  "BHS" => "Bahamas",
  "BHR" => "Bahrain",
  "BGD" => "Bangladesh",
  "BLR" => "Belarus",
  "BLZ" => "Belize",
  "BEN" => "Benin",
  "BMU" => "Bermuda (A)",
  "BTN" => "Butão",
  "BOL" => "Bolívia",
  "BIH" => "Bósnia e Herzegovina",
  "BWA" => "Botswana",
  "BVT" => "Noruega - Bouvet (Ilha)",
  "IOT" => ".. Terr Brit Oceano Índico - Diego Garcia",
  "VGB" => "Ilhas Virgens Britânicas ()",
  "BRN" => "Brunei",
  "BFA" => "Burkina Faso",
  "BDI" => "Burundi",
  "KHM" => "Cambodia",
  "CMR" => "Camarões",
  "CPV" => "Cabo Verde",
  "CYM" => "Cayman (Ilhas)",
  "CAF" => "Central (Rep.)",
  "TCD" => "Chad",
  "CXR" => "Austrália - Natal (Ilha)",
  "CCK" => "Austrália - Ilhas Cocos (Keeling) ()",
  "COM" => "Comores",
  "COG" => "Congo",
  "COK" => "Cook (Ilhas)",
  "CUB" => "Cuba",
  "CYP" => "Chipre",
  "DJI" => "Djibouti",
  "DMA" => "Dominica",
  "DOM" => "Dominicana (Rep.)",
  "TLS" => "Timor Leste",
  "GNQ" => "Guiné Equatorial",
  "ERI" => "Erythr",
  "EST" => "Estónia",
  "ETH" => "Etiópia",
  "FLK" => "Ilhas Falkland (Malvinas)",
  "FRO" => "Ilhas Faroe ()",
  "FJI" => "Fiji (República da)",
  "GUF" => "França - Guiana",
  "PYF" => "França - Polinésia",
  "ATF" => "França - Territórios do Sul",
  "GAB" => "Gabão",
  "GMB" => "Gâmbia",
  "GEO" => "Georgia",
  "GHA" => "Gana",
  "GIB" => "Gibraltar",
  "GRL" => "Gronelândia",
  "GRD" => "Granada",
  "GLP" => "A França - Guadalupe",
  "GUM" => "Guam",
  "GTM" => "Guatemala",
  "GIN" => "Guin",
  "GNB" => "Guiné-Bissau",
  "HTI" => "Haiti",
  "HMD" => "Austrália - Heard e McDonald (Ilhas)",
  "HND" => "Honduras",
  "ISL" => "Islândia",
  "IRN" => "Irã",
  "IRQ" => "Iraque",
  "CIV" => "Côte d'Ivoire",
  "JAM" => "Jamaica",
  "KAZ" => "Cazaquistão",
  "KEN" => "Quênia",
  "KIR" => "Kiribati",
  "KWT" => "Kuwait",
  "KGZ" => "Quirguistão",
  "LAO" => "Laos",
  "LVA" => "Letónia",
  "LSO" => "Lesoto",
  "LBR" => "Libéria",
  "LBY" => "Líbia",
  "LIE" => "Liechtenstein",
  "LTU" => "Lituânia",
  "LUX" => "Luxemburgo",
  "MAC" => "Macau",
  "MKD" => "Macedónia",
  "MDG" => "Madagascar",
  "MWI" => "Malawi",
  "MDV" => "Maldivas (Ilhas)",
  "MLI" => "Mali",
  "MLT" => "Malta",
  "MHL" => "Marshall (Ilhas)",
  "MTQ" => "France - Martinica",
  "MRT" => "Mauritânia",
  "MUS" => "Maurice",
  "MYT" => "França - Mayotte",
  "FSM" => "Micronésia (Estados Federados da)",
  "MDA" => "Moldávia",
  "MCO" => "Monaco",
  "MNG" => "Mongólia",
  "MSR" => "Montserrat",
  "MOZ" => "Moçambique",
  "MMR" => "Mianmar",
  "NAM" => "Namíbia",
  "NRU" => "Nauru",
  "NPL" => "Nepal",
  "NCL" => "França - Nova Caledônia",
  "NIC" => "Nicarágua",
  "NER" => "Níger",
  "NGA" => "Nigéria",
  "NIU" => "Niue",
  "NFK" => "Austrália - Norfolk (Ilha)",
  "MNP" => "Ilhas Marianas do Norte ()",
  "OMN" => "Omã",
  "PLW" => "Palau",
  "PAN" => "Panama",
  "PNG" => "Papua Nova Guiné",
  "PRY" => "Paraguai",
  "PCN" => "Pitcairn (Ilha)",
  "QAT" => "Qatar",
  "REU" => "França - Reunion",
  "RWA" => "Ruanda",
  "SGS" => "Geórgia do Sul e Sandwich do Sul ()",
  "KNA" => "São Cristóvão e Nevis",
  "LCA" => "Santa Lúcia",
  "VCT" => "São Vicente e Granadinas",
  "WSM" => "Samoa",
  "SMR" => "San Marino (Rep.)",
  "STP" => "São Tomé e Príncipe (República da)",
  "SEN" => "Senegal",
  "SYC" => "Seychelles",
  "SLE" => "Serra Leoa",
  "SVK" => "Eslováquia ",
  "SVN" => "Eslovénia",
  "SOM" => "Somália",
  "LKA" => "Sri Lanka",
  "SHN" => "Santa Helena",
  "SPM" => "França - Saint Pierre e Miquelon",
  "SDN" => "Sudão",
  "SUR" => "Suriname",
  "SJM" => "Noruega - Svalbard e Jan Mayen (Ilha)",
  "SWZ" => "Suazilândia",
  "SYR" => "Síria",
  "TJK" => "Tajiquistão",
  "TZA" => "Tanzânia",
  "TGO" => "Togo",
  "TKL" => "Nova Zelândia - Tokelau",
  "TON" => "Tonga",
  "TTO" => "Trinidad e Tobago",
  "TUN" => "Tunísia",
  "TKM" => "Turcomenistão",
  "TCA" => "Turks e Caicos (Ilhas)",
  "TUV" => "Tuvalu",
  "UMI" => "EUA: Ilhas Menores Distantes",
  "UGA" => "Uganda",
  "URY" => "Uruguai",
  "UZB" => "Usbequistão",
  "VUT" => "Vanuatu",
  "VAT" => "Cidade do Vaticano (Estado)",
  "VNM" => "Vietnam",
  "VIR" => "Virgens Americanas (Ilhas)",
  "WLF" => "França - Wallis e Futuna",
  "ESH" => "Sara Ocidental",
  "YEM" => "Yemen",
  "COD" => "Congo Zaire (Rep. Dem.).",
  "ZMB" => "Zâmbia",
  "ZWE" => "Zimbabwe",
  "BRB" => "Barbados",
  "MNE" => "Montenegro"
);
