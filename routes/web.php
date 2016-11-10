<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\User;
use App\Conference;
use App\Play;
use App\Country;
use App\Photo;
use App\Gallery;
use App\Comment;


Auth::routes();

/*Route::get('/countries-seed', function() {

    $countries = array(
    array(
    'id' => 1,
    'code' => 'US',
    'name' => 'United States'
    ),
    array(
    'id' => 2,
    'code' => 'CA',
    'name' => 'Canada'
    ),
    array(
    'id' => 3,
    'code' => 'AF',
    'name' => 'Afghanistan'
    ),
    array(
    'id' => 4,
    'code' => 'AL',
    'name' => 'Albania'
    ),
    array(
    'id' => 5,
    'code' => 'DZ',
    'name' => 'Algeria'
    ),
    array(
    'id' => 6,
    'code' => 'DS',
    'name' => 'American Samoa'
    ),
    array(
    'id' => 7,
    'code' => 'AD',
    'name' => 'Andorra'
    ),
    array(
    'id' => 8,
    'code' => 'AO',
    'name' => 'Angola'
    ),
    array(
    'id' => 9,
    'code' => 'AI',
    'name' => 'Anguilla'
    ),
    array(
    'id' => 10,
    'code' => 'AQ',
    'name' => 'Antarctica'
    ),
    array(
    'id' => 11,
    'code' => 'AG',
    'name' => 'Antigua and/or Barbuda'
    ),
    array(
    'id' => 12,
    'code' => 'AR',
    'name' => 'Argentina'
    ),
    array(
    'id' => 13,
    'code' => 'AM',
    'name' => 'Armenia'
    ),
    array(
    'id' => 14,
    'code' => 'AW',
    'name' => 'Aruba'
    ),
    array(
    'id' => 15,
    'code' => 'AU',
    'name' => 'Australia'
    ),
    array(
    'id' => 16,
    'code' => 'AT',
    'name' => 'Austria'
    ),
    array(
    'id' => 17,
    'code' => 'AZ',
    'name' => 'Azerbaijan'
    ),
    array(
    'id' => 18,
    'code' => 'BS',
    'name' => 'Bahamas'
    ),
    array(
    'id' => 19,
    'code' => 'BH',
    'name' => 'Bahrain'
    ),
    array(
    'id' => 20,
    'code' => 'BD',
    'name' => 'Bangladesh'
    ),
    array(
    'id' => 21,
    'code' => 'BB',
    'name' => 'Barbados'
    ),
    array(
    'id' => 22,
    'code' => 'BY',
    'name' => 'Belarus'
    ),
    array(
    'id' => 23,
    'code' => 'BE',
    'name' => 'Belgium'
    ),
    array(
    'id' => 24,
    'code' => 'BZ',
    'name' => 'Belize'
    ),
    array(
    'id' => 25,
    'code' => 'BJ',
    'name' => 'Benin'
    ),
    array(
    'id' => 26,
    'code' => 'BM',
    'name' => 'Bermuda'
    ),
    array(
    'id' => 27,
    'code' => 'BT',
    'name' => 'Bhutan'
    ),
    array(
    'id' => 28,
    'code' => 'BO',
    'name' => 'Bolivia'
    ),
    array(
    'id' => 29,
    'code' => 'BA',
    'name' => 'Bosnia and Herzegovina'
    ),
    array(
    'id' => 30,
    'code' => 'BW',
    'name' => 'Botswana'
    ),
    array(
    'id' => 31,
    'code' => 'BV',
    'name' => 'Bouvet Island'
    ),
    array(
    'id' => 32,
    'code' => 'BR',
    'name' => 'Brazil'
    ),
    array(
    'id' => 33,
    'code' => 'IO',
    'name' => 'British lndian Ocean Territory'
    ),
    array(
    'id' => 34,
    'code' => 'BN',
    'name' => 'Brunei Darussalam'
    ),
    array(
    'id' => 35,
    'code' => 'BG',
    'name' => 'Bulgaria'
    ),
    array(
    'id' => 36,
    'code' => 'BF',
    'name' => 'Burkina Faso'
    ),
    array(
    'id' => 37,
    'code' => 'BI',
    'name' => 'Burundi'
    ),
    array(
    'id' => 38,
    'code' => 'KH',
    'name' => 'Cambodia'
    ),
    array(
    'id' => 39,
    'code' => 'CM',
    'name' => 'Cameroon'
    ),
    array(
    'id' => 40,
    'code' => 'CV',
    'name' => 'Cape Verde'
    ),
    array(
    'id' => 41,
    'code' => 'KY',
    'name' => 'Cayman Islands'
    ),
    array(
    'id' => 42,
    'code' => 'CF',
    'name' => 'Central African Republic'
    ),
    array(
    'id' => 43,
    'code' => 'TD',
    'name' => 'Chad'
    ),
    array(
    'id' => 44,
    'code' => 'CL',
    'name' => 'Chile'
    ),
    array(
    'id' => 45,
    'code' => 'CN',
    'name' => 'China'
    ),
    array(
    'id' => 46,
    'code' => 'CX',
    'name' => 'Christmas Island'
    ),
    array(
    'id' => 47,
    'code' => 'CC',
    'name' => 'Cocos (Keeling) Islands'
    ),
    array(
    'id' => 48,
    'code' => 'CO',
    'name' => 'Colombia'
    ),
    array(
    'id' => 49,
    'code' => 'KM',
    'name' => 'Comoros'
    ),
    array(
    'id' => 50,
    'code' => 'CG',
    'name' => 'Congo'
    ),
    array(
    'id' => 51,
    'code' => 'CK',
    'name' => 'Cook Islands'
    ),
    array(
    'id' => 52,
    'code' => 'CR',
    'name' => 'Costa Rica'
    ),
    array(
    'id' => 53,
    'code' => 'HR',
    'name' => 'Croatia (Hrvatska)'
    ),
    array(
    'id' => 54,
    'code' => 'CU',
    'name' => 'Cuba'
    ),
    array(
    'id' => 55,
    'code' => 'CY',
    'name' => 'Cyprus'
    ),
    array(
    'id' => 56,
    'code' => 'CZ',
    'name' => 'Czech Republic'
    ),
    array(
    'id' => 57,
    'code' => 'DK',
    'name' => 'Denmark'
    ),
    array(
    'id' => 58,
    'code' => 'DJ',
    'name' => 'Djibouti'
    ),
    array(
    'id' => 59,
    'code' => 'DM',
    'name' => 'Dominica'
    ),
    array(
    'id' => 60,
    'code' => 'DO',
    'name' => 'Dominican Republic'
    ),
    array(
    'id' => 61,
    'code' => 'TP',
    'name' => 'East Timor'
    ),
    array(
    'id' => 62,
    'code' => 'EC',
    'name' => 'Ecudaor'
    ),
    array(
    'id' => 63,
    'code' => 'EG',
    'name' => 'Egypt'
    ),
    array(
    'id' => 64,
    'code' => 'SV',
    'name' => 'El Salvador'
    ),
    array(
    'id' => 65,
    'code' => 'GQ',
    'name' => 'Equatorial Guinea'
    ),
    array(
    'id' => 66,
    'code' => 'ER',
    'name' => 'Eritrea'
    ),
    array(
    'id' => 67,
    'code' => 'EE',
    'name' => 'Estonia'
    ),
    array(
    'id' => 68,
    'code' => 'ET',
    'name' => 'Ethiopia'
    ),
    array(
    'id' => 69,
    'code' => 'FK',
    'name' => 'Falkland Islands (Malvinas)'
    ),
    array(
    'id' => 70,
    'code' => 'FO',
    'name' => 'Faroe Islands'
    ),
    array(
    'id' => 71,
    'code' => 'FJ',
    'name' => 'Fiji'
    ),
    array(
    'id' => 72,
    'code' => 'FI',
    'name' => 'Finland'
    ),
    array(
    'id' => 73,
    'code' => 'FR',
    'name' => 'France'
    ),
    array(
    'id' => 74,
    'code' => 'FX',
    'name' => 'France, Metropolitan'
    ),
    array(
    'id' => 75,
    'code' => 'GF',
    'name' => 'French Guiana'
    ),
    array(
    'id' => 76,
    'code' => 'PF',
    'name' => 'French Polynesia'
    ),
    array(
    'id' => 77,
    'code' => 'TF',
    'name' => 'French Southern Territories'
    ),
    array(
    'id' => 78,
    'code' => 'GA',
    'name' => 'Gabon'
    ),
    array(
    'id' => 79,
    'code' => 'GM',
    'name' => 'Gambia'
    ),
    array(
    'id' => 80,
    'code' => 'GE',
    'name' => 'Georgia'
    ),
    array(
    'id' => 81,
    'code' => 'DE',
    'name' => 'Germany'
    ),
    array(
    'id' => 82,
    'code' => 'GH',
    'name' => 'Ghana'
    ),
    array(
    'id' => 83,
    'code' => 'GI',
    'name' => 'Gibraltar'
    ),
    array(
    'id' => 84,
    'code' => 'GR',
    'name' => 'Greece'
    ),
    array(
    'id' => 85,
    'code' => 'GL',
    'name' => 'Greenland'
    ),
    array(
    'id' => 86,
    'code' => 'GD',
    'name' => 'Grenada'
    ),
    array(
    'id' => 87,
    'code' => 'GP',
    'name' => 'Guadeloupe'
    ),
    array(
    'id' => 88,
    'code' => 'GU',
    'name' => 'Guam'
    ),
    array(
    'id' => 89,
    'code' => 'GT',
    'name' => 'Guatemala'
    ),
    array(
    'id' => 90,
    'code' => 'GN',
    'name' => 'Guinea'
    ),
    array(
    'id' => 91,
    'code' => 'GW',
    'name' => 'Guinea-Bissau'
    ),
    array(
    'id' => 92,
    'code' => 'GY',
    'name' => 'Guyana'
    ),
    array(
    'id' => 93,
    'code' => 'HT',
    'name' => 'Haiti'
    ),
    array(
    'id' => 94,
    'code' => 'HM',
    'name' => 'Heard and Mc Donald Islands'
    ),
    array(
    'id' => 95,
    'code' => 'HN',
    'name' => 'Honduras'
    ),
    array(
    'id' => 96,
    'code' => 'HK',
    'name' => 'Hong Kong'
    ),
    array(
    'id' => 97,
    'code' => 'HU',
    'name' => 'Hungary'
    ),
    array(
    'id' => 98,
    'code' => 'IS',
    'name' => 'Iceland'
    ),
    array(
    'id' => 99,
    'code' => 'IN',
    'name' => 'India'
    ),
    array(
    'id' => 100,
    'code' => 'ID',
    'name' => 'Indonesia'
    ),
    array(
    'id' => 101,
    'code' => 'IR',
    'name' => 'Iran (Islamic Republic of)'
    ),
    array(
    'id' => 102,
    'code' => 'IQ',
    'name' => 'Iraq'
    ),
    array(
    'id' => 103,
    'code' => 'IE',
    'name' => 'Ireland'
    ),
    array(
    'id' => 104,
    'code' => 'IL',
    'name' => 'Israel'
    ),
    array(
    'id' => 105,
    'code' => 'IT',
    'name' => 'Italy'
    ),
    array(
    'id' => 106,
    'code' => 'CI',
    'name' => 'Ivory Coast'
    ),
    array(
    'id' => 107,
    'code' => 'JM',
    'name' => 'Jamaica'
    ),
    array(
    'id' => 108,
    'code' => 'JP',
    'name' => 'Japan'
    ),
    array(
    'id' => 109,
    'code' => 'JO',
    'name' => 'Jordan'
    ),
    array(
    'id' => 110,
    'code' => 'KZ',
    'name' => 'Kazakhstan'
    ),
    array(
    'id' => 111,
    'code' => 'KE',
    'name' => 'Kenya'
    ),
    array(
    'id' => 112,
    'code' => 'KI',
    'name' => 'Kiribati'
    ),
    array(
    'id' => 113,
    'code' => 'KP',
    'name' => 'Korea, Democratic People\'s Republic of'
    ),
    array(
    'id' => 114,
    'code' => 'KR',
    'name' => 'Korea, Republic of'
    ),
    array(
    'id' => 115,
    'code' => 'KW',
    'name' => 'Kuwait'
    ),
    array(
    'id' => 116,
    'code' => 'KG',
    'name' => 'Kyrgyzstan'
    ),
    array(
    'id' => 117,
    'code' => 'LA',
    'name' => 'Lao People\'s Democratic Republic'
    ),
    array(
    'id' => 118,
    'code' => 'LV',
    'name' => 'Latvia'
    ),
    array(
    'id' => 119,
    'code' => 'LB',
    'name' => 'Lebanon'
    ),
    array(
    'id' => 120,
    'code' => 'LS',
    'name' => 'Lesotho'
    ),
    array(
    'id' => 121,
    'code' => 'LR',
    'name' => 'Liberia'
    ),
    array(
    'id' => 122,
    'code' => 'LY',
    'name' => 'Libyan Arab Jamahiriya'
    ),
    array(
    'id' => 123,
    'code' => 'LI',
    'name' => 'Liechtenstein'
    ),
    array(
    'id' => 124,
    'code' => 'LT',
    'name' => 'Lithuania'
    ),
    array(
    'id' => 125,
    'code' => 'LU',
    'name' => 'Luxembourg'
    ),
    array(
    'id' => 126,
    'code' => 'MO',
    'name' => 'Macau'
    ),
    array(
    'id' => 127,
    'code' => 'MK',
    'name' => 'Macedonia'
    ),
    array(
    'id' => 128,
    'code' => 'MG',
    'name' => 'Madagascar'
    ),
    array(
    'id' => 129,
    'code' => 'MW',
    'name' => 'Malawi'
    ),
    array(
    'id' => 130,
    'code' => 'MY',
    'name' => 'Malaysia'
    ),
    array(
    'id' => 131,
    'code' => 'MV',
    'name' => 'Maldives'
    ),
    array(
    'id' => 132,
    'code' => 'ML',
    'name' => 'Mali'
    ),
    array(
    'id' => 133,
    'code' => 'MT',
    'name' => 'Malta'
    ),
    array(
    'id' => 134,
    'code' => 'MH',
    'name' => 'Marshall Islands'
    ),
    array(
    'id' => 135,
    'code' => 'MQ',
    'name' => 'Martinique'
    ),
    array(
    'id' => 136,
    'code' => 'MR',
    'name' => 'Mauritania'
    ),
    array(
    'id' => 137,
    'code' => 'MU',
    'name' => 'Mauritius'
    ),
    array(
    'id' => 138,
    'code' => 'TY',
    'name' => 'Mayotte'
    ),
    array(
    'id' => 139,
    'code' => 'MX',
    'name' => 'Mexico'
    ),
    array(
    'id' => 140,
    'code' => 'FM',
    'name' => 'Micronesia, Federated States of'
    ),
    array(
    'id' => 141,
    'code' => 'MD',
    'name' => 'Moldova, Republic of'
    ),
    array(
    'id' => 142,
    'code' => 'MC',
    'name' => 'Monaco'
    ),
    array(
    'id' => 143,
    'code' => 'MN',
    'name' => 'Mongolia'
    ),
    array(
    'id' => 144,
    'code' => 'MS',
    'name' => 'Montserrat'
    ),
    array(
    'id' => 145,
    'code' => 'MA',
    'name' => 'Morocco'
    ),
    array(
    'id' => 146,
    'code' => 'MZ',
    'name' => 'Mozambique'
    ),
    array(
    'id' => 147,
    'code' => 'MM',
    'name' => 'Myanmar'
    ),
    array(
    'id' => 148,
    'code' => 'NA',
    'name' => 'Namibia'
    ),
    array(
    'id' => 149,
    'code' => 'NR',
    'name' => 'Nauru'
    ),
    array(
    'id' => 150,
    'code' => 'NP',
    'name' => 'Nepal'
    ),
    array(
    'id' => 151,
    'code' => 'NL',
    'name' => 'Netherlands'
    ),
    array(
    'id' => 152,
    'code' => 'AN',
    'name' => 'Netherlands Antilles'
    ),
    array(
    'id' => 153,
    'code' => 'NC',
    'name' => 'New Caledonia'
    ),
    array(
    'id' => 154,
    'code' => 'NZ',
    'name' => 'New Zealand'
    ),
    array(
    'id' => 155,
    'code' => 'NI',
    'name' => 'Nicaragua'
    ),
    array(
    'id' => 156,
    'code' => 'NE',
    'name' => 'Niger'
    ),
    array(
    'id' => 157,
    'code' => 'NG',
    'name' => 'Nigeria'
    ),
    array(
    'id' => 158,
    'code' => 'NU',
    'name' => 'Niue'
    ),
    array(
    'id' => 159,
    'code' => 'NF',
    'name' => 'Norfork Island'
    ),
    array(
    'id' => 160,
    'code' => 'MP',
    'name' => 'Northern Mariana Islands'
    ),
    array(
    'id' => 161,
    'code' => 'NO',
    'name' => 'Norway'
    ),
    array(
    'id' => 162,
    'code' => 'OM',
    'name' => 'Oman'
    ),
    array(
    'id' => 163,
    'code' => 'PK',
    'name' => 'Pakistan'
    ),
    array(
    'id' => 164,
    'code' => 'PW',
    'name' => 'Palau'
    ),
    array(
    'id' => 165,
    'code' => 'PA',
    'name' => 'Panama'
    ),
    array(
    'id' => 166,
    'code' => 'PG',
    'name' => 'Papua New Guinea'
    ),
    array(
    'id' => 167,
    'code' => 'PY',
    'name' => 'Paraguay'
    ),
    array(
    'id' => 168,
    'code' => 'PE',
    'name' => 'Peru'
    ),
    array(
    'id' => 169,
    'code' => 'PH',
    'name' => 'Philippines'
    ),
    array(
    'id' => 170,
    'code' => 'PN',
    'name' => 'Pitcairn'
    ),
    array(
    'id' => 171,
    'code' => 'PL',
    'name' => 'Poland'
    ),
    array(
    'id' => 172,
    'code' => 'PT',
    'name' => 'Portugal'
    ),
    array(
    'id' => 173,
    'code' => 'PR',
    'name' => 'Puerto Rico'
    ),
    array(
    'id' => 174,
    'code' => 'QA',
    'name' => 'Qatar'
    ),
    array(
    'id' => 175,
    'code' => 'RE',
    'name' => 'Reunion'
    ),
    array(
    'id' => 176,
    'code' => 'RO',
    'name' => 'Romania'
    ),
    array(
    'id' => 177,
    'code' => 'RU',
    'name' => 'Russian Federation'
    ),
    array(
    'id' => 178,
    'code' => 'RW',
    'name' => 'Rwanda'
    ),
    array(
    'id' => 179,
    'code' => 'KN',
    'name' => 'Saint Kitts and Nevis'
    ),
    array(
    'id' => 180,
    'code' => 'LC',
    'name' => 'Saint Lucia'
    ),
    array(
    'id' => 181,
    'code' => 'VC',
    'name' => 'Saint Vincent and the Grenadines'
    ),
    array(
    'id' => 182,
    'code' => 'WS',
    'name' => 'Samoa'
    ),
    array(
    'id' => 183,
    'code' => 'SM',
    'name' => 'San Marino'
    ),
    array(
    'id' => 184,
    'code' => 'ST',
    'name' => 'Sao Tome and Principe'
    ),
    array(
    'id' => 185,
    'code' => 'SA',
    'name' => 'Saudi Arabia'
    ),
    array(
    'id' => 186,
    'code' => 'SN',
    'name' => 'Senegal'
    ),
    array(
    'id' => 187,
    'code' => 'SC',
    'name' => 'Seychelles'
    ),
    array(
    'id' => 188,
    'code' => 'SL',
    'name' => 'Sierra Leone'
    ),
    array(
    'id' => 189,
    'code' => 'SG',
    'name' => 'Singapore'
    ),
    array(
    'id' => 190,
    'code' => 'SK',
    'name' => 'Slovakia'
    ),
    array(
    'id' => 191,
    'code' => 'SI',
    'name' => 'Slovenia'
    ),
    array(
    'id' => 192,
    'code' => 'SB',
    'name' => 'Solomon Islands'
    ),
    array(
    'id' => 193,
    'code' => 'SO',
    'name' => 'Somalia'
    ),
    array(
    'id' => 194,
    'code' => 'ZA',
    'name' => 'South Africa'
    ),
    array(
    'id' => 195,
    'code' => 'GS',
    'name' => 'South Georgia South Sandwich Islands'
    ),
    array(
    'id' => 196,
    'code' => 'ES',
    'name' => 'Spain'
    ),
    array(
    'id' => 197,
    'code' => 'LK',
    'name' => 'Sri Lanka'
    ),
    array(
    'id' => 198,
    'code' => 'SH',
    'name' => 'St. Helena'
    ),
    array(
    'id' => 199,
    'code' => 'PM',
    'name' => 'St. Pierre and Miquelon'
    ),
    array(
    'id' => 200,
    'code' => 'SD',
    'name' => 'Sudan'
    ),
    array(
    'id' => 201,
    'code' => 'SR',
    'name' => 'Suriname'
    ),
    array(
    'id' => 202,
    'code' => 'SJ',
    'name' => 'Svalbarn and Jan Mayen Islands'
    ),
    array(
    'id' => 203,
    'code' => 'SZ',
    'name' => 'Swaziland'
    ),
    array(
    'id' => 204,
    'code' => 'SE',
    'name' => 'Sweden'
    ),
    array(
    'id' => 205,
    'code' => 'CH',
    'name' => 'Switzerland'
    ),
    array(
    'id' => 206,
    'code' => 'SY',
    'name' => 'Syrian Arab Republic'
    ),
    array(
    'id' => 207,
    'code' => 'TW',
    'name' => 'Taiwan'
    ),
    array(
    'id' => 208,
    'code' => 'TJ',
    'name' => 'Tajikistan'
    ),
    array(
    'id' => 209,
    'code' => 'TZ',
    'name' => 'Tanzania, United Republic of'
    ),
    array(
    'id' => 210,
    'code' => 'TH',
    'name' => 'Thailand'
    ),
    array(
    'id' => 211,
    'code' => 'TG',
    'name' => 'Togo'
    ),
    array(
    'id' => 212,
    'code' => 'TK',
    'name' => 'Tokelau'
    ),
    array(
    'id' => 213,
    'code' => 'TO',
    'name' => 'Tonga'
    ),
    array(
    'id' => 214,
    'code' => 'TT',
    'name' => 'Trinidad and Tobago'
    ),
    array(
    'id' => 215,
    'code' => 'TN',
    'name' => 'Tunisia'
    ),
    array(
    'id' => 216,
    'code' => 'TR',
    'name' => 'Turkey'
    ),
    array(
    'id' => 217,
    'code' => 'TM',
    'name' => 'Turkmenistan'
    ),
    array(
    'id' => 218,
    'code' => 'TC',
    'name' => 'Turks and Caicos Islands'
    ),
    array(
    'id' => 219,
    'code' => 'TV',
    'name' => 'Tuvalu'
    ),
    array(
    'id' => 220,
    'code' => 'UG',
    'name' => 'Uganda'
    ),
    array(
    'id' => 221,
    'code' => 'UA',
    'name' => 'Ukraine'
    ),
    array(
    'id' => 222,
    'code' => 'AE',
    'name' => 'United Arab Emirates'
    ),
    array(
    'id' => 223,
    'code' => 'GB',
    'name' => 'United Kingdom'
    ),
    array(
    'id' => 224,
    'code' => 'UM',
    'name' => 'United States minor outlying islands'
    ),
    array(
    'id' => 225,
    'code' => 'UY',
    'name' => 'Uruguay'
    ),
    array(
    'id' => 226,
    'code' => 'UZ',
    'name' => 'Uzbekistan'
    ),
    array(
    'id' => 227,
    'code' => 'VU',
    'name' => 'Vanuatu'
    ),
    array(
    'id' => 228,
    'code' => 'VA',
    'name' => 'Vatican City State'
    ),
    array(
    'id' => 229,
    'code' => 'VE',
    'name' => 'Venezuela'
    ),
    array(
    'id' => 230,
    'code' => 'VN',
    'name' => 'Vietnam'
    ),
    array(
    'id' => 231,
    'code' => 'VG',
    'name' => 'Virigan Islands (British)'
    ),
    array(
    'id' => 232,
    'code' => 'VI',
    'name' => 'Virgin Islands (U.S.)'
    ),
    array(
    'id' => 233,
    'code' => 'WF',
    'name' => 'Wallis and Futuna Islands'
    ),
    array(
    'id' => 234,
    'code' => 'EH',
    'name' => 'Western Sahara'
    ),
    array(
    'id' => 235,
    'code' => 'YE',
    'name' => 'Yemen'
    ),
    array(
    'id' => 236,
    'code' => 'YU',
    'name' => 'Yugoslavia'
    ),
    array(
    'id' => 237,
    'code' => 'ZR',
    'name' => 'Zaire'
    ),
    array(
    'id' => 238,
    'code' => 'ZM',
    'name' => 'Zambia'
    ),
    array(
    'id' => 239,
    'code' => 'ZW',
    'name' => 'Zimbabwe'
    )
    );
foreach($countries as $country){

   Country::create( ['id'=>$country['id'], 'code'=>$country['code'], 'name'=>$country['name'] ] );

}


});*/

/*----------------------------------------------------------------------------------------------
|
| cms routes (middleware to ensure only authorized+active users can access)
|
----------------------------------------------------------------------------------------------*/

/*
---------------------------------------------------------------------------*/
// users home page
Route::get('/home','HomeController@home');

Route::group([ 'middleware' => 'admin' ], function() {

    /* index
    ---------------------------------------------------------------------------*/
    Route::get('/admin', function() {

        return view('admin.index');

    });

    Route::get('/admin', 'HomeController@index');

    /* users
    ---------------------------------------------------------------------------*/
    Route::resource('admin/users', 'AdminUsersController');

    // view users route with alias
    Route::get('admin/users', [ 'as' => 'admin.users', 'uses' => 'AdminUsersController@index' ]);

    // create user route with alias
    Route::get('admin/users/create', [ 'as' => 'users.create', 'uses' => 'AdminUsersController@create' ]);

    /* conferences
    ---------------------------------------------------------------------------*/

    Route::resource('admin/conferences', 'ConferencesController');

    /* plays
    ---------------------------------------------------------------------------*/

    // show related plays
    Route::get('admin/conferences/{conference}/plays', [ 'as' => 'plays.conference.show', 'uses' => 'ConferencesController@show_plays' ]);

    Route::resource('admin/plays', 'PlaysController');

    Route::get('admin/plays/link/{play}', [ 'as' => 'play.link', 'uses' => 'PlaysController@link_play' ]);

    Route::post('admin/plays/link/', [ 'as' => 'play.dolink', 'uses' => 'PlaysController@do_link' ]);

    /* posts
    ---------------------------------------------------------------------------*/
    Route::resource('admin/posts', 'AdminPostsController');

    /* galleries
    ---------------------------------------------------------------------------*/

    // standard gallery crud
    Route::resource('admin/galleries', 'GalleriesController');

    // store gallery (without images)
    Route::post('admin/galleries/1', [ 'as' => 'galleries.store.name', 'uses' => 'GalleriesController@store_gallery' ]);

    // store gallery (without images)
    Route::post('admin/galleries/2', [ 'as' => 'galleries.store', 'uses' => 'GalleriesController@store' ]);

    // display link gallery to conference page
    Route::get('admin/galleries/link/{gallery}', [ 'as' => 'galleries.link', 'uses' => 'GalleriesController@link_gallery' ]);

    // perform gallery link to conference function
    Route::post('admin/galleries/link/', [ 'as' => 'galleries.dolink', 'uses' => 'GalleriesController@do_link' ]);

    // upload images (dropzone)
    Route::post('admin/gallery/do-image-upload', 'GalleriesController@doImageUpload');

    // remove individual images
    Route::get('admin/gallery/{id}/imageRemove', [ 'as' => 'galleries.imageRemove', 'uses' => 'GalleriesController@imageRemove' ]);

    /* about
    ----------------------------------------------------------------------------------------------*/
    Route::resource('admin/about', 'AdminAboutSection');

});

/* constants
----------------------------------------------------------------------------------------------*/

// image directory
define('IMAGE_DIR', public_path() . '/images/');

// conference image directory
define('IMAGE_CONF', public_path() . IMAGE_DIR . '/conferences/');

// plays image directory
define('IMAGE_PLAYS', public_path() . IMAGE_DIR . '/plays/');

// users image directory
define('IMAGE_POSTS', public_path() . IMAGE_DIR . '/posts/');

// users image directory
define('IMAGE_USERS', public_path() . IMAGE_DIR . '/users/');

// gallery directory
define('GALLERY_IMAGE_DIR', public_path() . '/gallery/images/');

// mailgun
define('MAILGUN_KEY', 'key-57984f0f7aa476d34fd737110e8071f9');
define('MAILGUN_PUBKEY','pubkey-71491ff9e2191c0af3931fdc48d1e9bf');
define('MAILGUN_DOMAIN','williamlangroudi.com');
define('MAILGUN_LIST','testbot@sandbox099536ff9ed1403ebd2e665eaf77d3de.mailgun.org');
define('MAILGUN_SECRET','green');



/*----------------------------------------------------------------------------------------------
|
| front-end
|
----------------------------------------------------------------------------------------------*/

// index
Route::get('/', 'PagesController@index');

//conferences
Route::get('/conferences', 'PagesController@conferences');

// show individual conference
Route::get('/conference/{id}', [ 'as' => 'conference.show', 'uses' => 'PagesController@show_conference' ]);

// show conferences related plays
Route::get('/conference/{id}/play', [ 'as' => 'conference.plays.view', 'uses' => 'PagesController@show_conference_plays' ]);

// show individual conference related play
Route::get('/conference/play/{id}', [ 'as' => 'conference.play', 'uses' => 'PagesController@show_related_play' ]);

// show play listing
Route::get('plays',['as'=>'play.show','uses'=>'PagesController@plays']);

// show individual gallery
Route::get('/gallery/{id}', [ 'as' => 'gallery.view', 'uses' => 'PagesController@show_related_gallery' ]);

// show about page
Route::get('/about-us', 'PagesController@about');

// show members page
Route::get('/members', 'PagesController@members');

// view member
Route::get('/members/{id}', [ 'as' => 'member.profile', 'uses' => 'PagesController@member_view' ]);

// show galleries listing page
Route::get('/galleries', 'PagesController@galleries');

// show galleries listing page
Route::get('/galleries/{id}', [ 'as' => 'gallery.view', 'uses' => 'PagesController@show_gallery' ]);

// show blog page
Route::get('/blog', [ 'as' => 'blog.index', 'uses' => 'PagesController@blog' ]);

// show individual post
Route::get('/post/{id}', [ 'as' => 'post.show', 'uses' => 'PagesController@show_post' ]);

// show blog category
Route::get('/blog/category/{id}', [ 'as' => 'posts.by.category', 'uses' => 'PagesController@posts_by_category' ]);

// show contact page
Route::get('/contact', 'PagesController@contact');

// perform contact form processing
Route::post('/contact', 'PagesController@post_contact');

// show user profile
Route::get('/profile', [ 'as' => 'user.profile', 'uses' => 'PagesController@profile' ]);

// show user profile
Route::get('/profile/edit/{id}', [ 'as' => 'user.profile.edit', 'uses' => 'PagesController@profile_edit' ]);

// update user profile data
Route::patch('/profile/update/{id}', [ 'as' => 'user.profile.update', 'uses' => 'PagesController@profile_update' ]);

// comments
Route::resource('admin/comments', 'CommentsController');

// newsletter subscribe method
Route::post('/newsletter/subscribe',['as'=>'newsletter.subscribe', 'uses' => 'MailController@newsletter_subscribe']);

// show confirm success page
Route::get('/subscribe',function() {
    return view('subscribe');
});

// newsletter confirm method
Route::get('/confirm/{hash}', ['as'=>'newsletter_confirm', 'uses' => 'MailController@newsletter_confirm']);

// show confirm success page
Route::get('/confirm',function() {
    return view('confirm');
});