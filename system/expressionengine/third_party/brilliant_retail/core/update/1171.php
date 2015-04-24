<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/************************************************************/
/*	BrilliantRetail 										*/
/*															*/
/*	@package	BrilliantRetail								*/
/*	@Author		David Dexter  								*/
/* 	@copyright	Copyright (c) 2010-2015						*/
/* 	@license	http://brilliantretail.com/license.html		*/
/* 	@link		http://brilliantretail.com 					*/
/*															*/
/************************************************************/
/* NOTICE													*/
/*															*/
/* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF 	*/
/* ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED	*/
/* TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 		*/
/* PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT 		*/
/* SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY */
/* CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION	*/
/* OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR 	*/
/* IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 		*/
/* DEALINGS IN THE SOFTWARE. 								*/	
/************************************************************/

// Add US Territories that are missing
	$sql[] = "INSERT INTO exp_br_state (zone_id,code,title) VALUES (1,'FM','Federated States of Micronesia');"; 
	$sql[] = "INSERT INTO exp_br_state (zone_id,code,title) VALUES (1,'GU','Guam');"; 
	$sql[] = "INSERT INTO exp_br_state (zone_id,code,title) VALUES (1,'PR','Puerto Rico');"; 
	$sql[] = "INSERT INTO exp_br_state (zone_id,code,title) VALUES (1,'PW','Republic of Palau');"; 
	$sql[] = "INSERT INTO exp_br_state (zone_id,code,title) VALUES (1,'MH','Republic of the Marshall Islands');"; 
	$sql[] = "INSERT INTO exp_br_state (zone_id,code,title) VALUES (1,'VI','U.S. Virgin Islands');"; 

// Remove US Territories as Zones from zone and state tables
	$sql[] = "DELETE FROM exp_br_zone WHERE zone_id IN (5,89,135,167,177,229,230);";
	$sql[] = "DELETE FROM exp_br_state WHERE zone_id IN (5,89,135,167,177,229,230);";

// Update the config data entry for countries in the system
	$sql[] = "UPDATE exp_br_config_data SET options = 'AF:Afghanistan|AX:Aland Islands|AL:Albania|DZ:Algeria|AD:Andorra|AO:Angola|AI:Anguilla|AQ:Antarctica|AG:Antigua and Barbuda|AR:Argentina|AM:Armenia|AW:Aruba|AU:Australia|AT:Austria|AZ:Azerbaijan|BS:Bahamas|BH:Bahrain|BD:Bangladesh|BB:Barbados|BY:Belarus|BE:Belgium|BZ:Belize|BJ:Benin|BM:Bermuda|BT:Bhutan|BO:Bolivia|BA:Bosnia and Herzegovina|BW:Botswana|BV:Bouvet Island|BR:Brazil|IO:British Indian Ocean Territory|VG:British Virgin Islands|BN:Brunei|BG:Bulgaria|BF:Burkina Faso|BI:Burundi|KH:Cambodia|CM:Cameroon|CA:Canada|CV:Cape Verde|KY:Cayman Islands|CF:Central African Republic|TD:Chad|CL:Chile|CN:China|CX:Christmas Island|CC:Cocos [Keeling] Islands|CO:Colombia|KM:Comoros|CG:Congo - Brazzaville|CD:Congo - Kinshasa|CK:Cook Islands|CR:Costa Rica|CI:Cote d|HR:Croatia|CU:Cuba|CY:Cyprus|CZ:Czech Republic|DK:Denmark|DJ:Djibouti|DM:Dominica|DO:Dominican Republic|EC:Ecuador|EG:Egypt|SV:El Salvador|GQ:Equatorial Guinea|ER:Eritrea|EE:Estonia|ET:Ethiopia|FK:Falkland Islands|FO:Faroe Islands|FJ:Fiji|FI:Finland|FR:France|GF:French Guiana|PF:French Polynesia|TF:French Southern Territories|GA:Gabon|GM:Gambia|GE:Georgia|DE:Germany|GH:Ghana|GI:Gibraltar|GR:Greece|GL:Greenland|GD:Grenada|GP:Guadeloupe|GT:Guatemala|GN:Guinea|GW:Guinea-Bissau|GY:Guyana|HT:Haiti|HM:Heard Island and McDonald Islands|HN:Honduras|HK:Hong Kong SAR China|HU:Hungary|IS:Iceland|IN:India|ID:Indonesia|IR:Iran|IQ:Iraq|IE:Ireland|IM:Isle of Man|IL:Israel|IT:Italy|JM:Jamaica|JP:Japan|JO:Jordan|KZ:Kazakhstan|KE:Kenya|KI:Kiribati|KW:Kuwait|KG:Kyrgyzstan|LA:Laos|LV:Latvia|LB:Lebanon|LS:Lesotho|LR:Liberia|LY:Libya|LI:Liechtenstein|LT:Lithuania|LU:Luxembourg|MO:Macau SAR China|MK:Macedonia|MG:Madagascar|MW:Malawi|MY:Malaysia|MV:Maldives|ML:Mali|MT:Malta|MQ:Martinique|MR:Mauritania|MU:Mauritius|YT:Mayotte|MX:Mexico|FM:Micronesia|MD:Moldova|MC:Monaco|MN:Mongolia|MS:Montserrat|MA:Morocco|MZ:Mozambique|MM:Myanmar [Burma]|NA:Namibia|NR:Nauru|NP:Nepal|NL:Netherlands|AN:Netherlands Antilles|NC:New Caledonia|NZ:New Zealand|NI:Nicaragua|NE:Niger|NG:Nigeria|NU:Niue|NF:Norfolk Island|KP:North Korea|MP:Northern Mariana Islands|NO:Norway|OM:Oman|PK:Pakistan|PS:Palestinian Territories|PA:Panama|PG:Papua New Guinea|PY:Paraguay|PE:Peru|PH:Philippines|PN:Pitcairn Islands|PL:Poland|PT:Portugal|QA:Qatar|RE:Reunion|RO:Romania|RU:Russia|RW:Rwanda|SH:Saint Helena|KN:Saint Kitts and Nevis|LC:Saint Lucia|PM:Saint Pierre and Miquelon|VC:Saint Vincent and the Grenadines|WS:Samoa|SM:San Marino|ST:Sao Tome and Principe|SA:Saudi Arabia|SN:Senegal|SC:Seychelles|SL:Sierra Leone|SG:Singapore|SK:Slovakia|SI:Slovenia|SB:Solomon Islands|SO:Somalia|ZA:South Africa|GS:South Georgia and the South Sandwich Islands|KR:South Korea|ES:Spain|LK:Sri Lanka|SD:Sudan|SR:Suriname|SJ:Svalbard and Jan Mayen|SZ:Swaziland|SE:Sweden|CH:Switzerland|SY:Syria|TW:Taiwan|TJ:Tajikistan|TZ:Tanzania|TH:Thailand|TL:Timor-Leste|TG:Togo|TK:Tokelau|TO:Tonga|TT:Trinidad and Tobago|TN:Tunisia|TR:Turkey|TM:Turkmenistan|TC:Turks and Caicos Islands|TV:Tuvalu|UM:U.S. Minor Outlying Islands|UG:Uganda|UA:Ukraine|AE:United Arab Emirates|GB:United Kingdom|US:United States|UY:Uruguay|UZ:Uzbekistan|VU:Vanuatu|VA:Vatican City|VE:Venezuela|VN:Vietnam|WF:Wallis and Futuna|EH:Western Sahara|YE:Yemen|ZM:Zambia|ZW:Zimbabwe' WHERE config_data_id = 8;";
				