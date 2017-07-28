<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'login';

$route['tes'] = 'nbuw/tes';

$route['spaj'] = 'nbuw/spaj';
$route['polis'] = 'nbuw/polis';
$route['poliss'] = 'nbuw/polis/polis';
$route['ultah'] = 'ucapan/ultah';
$route['ahli-waris'] = 'pos/ahli_waris';
$route['alamat'] = 'pos/alamat';
$route['aro'] = 'pos/aro';
$route['marketing'] = 'pos/marketing';
$route['mature'] = 'pos/mature';
$route['no-rek'] = 'pos/no_rek';
$route['surender'] = 'pos/surender';

$route['pay-claim'] = 'claim/payment';
$route['pending'] = 'claim/pending';
$route['pay-bill'] = 'billing/payment';

$route['logout'] = 'login/logout';
$route['hari-raya'] = 'ucapan/hari_raya';
$route['kandidat-edit/(.*)'] = "kandidat/view_all_kandidat/edit_data_Pribadi/index/$1";

$route['home'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
