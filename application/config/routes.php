<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// //untuk jaga-jaga
// $route['assets'] = 'secure';
// $route['application'] = 'secure';
// $route['system'] = 'secure';


// // ini route khusus untuk form
// $route['form/tambah'] = 'form/tambah';
// $route['form/edit'] = 'form/edit';
// $route['form/(:any)'] = 'form/index/$1';
//
//
// // ini route khusus untuk table
// $route['table'] = 'table';
// $route['default_controller'] = 'table';
// $route['delete'] = 'table/delete';

$route['default_controller'] = 'welcome';
$route['login'] = 'login/login';
$route['verif'] = 'login/loginVerif';
// $route['default_controller'] = 'orang_ajax_d';
$route['ver2'] = 'orang_ajax_d';
$route['ver1'] = 'orang_ajax';

// ini bukan
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
