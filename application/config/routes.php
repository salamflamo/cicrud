<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ini route khusus untuk form
$route['form'] = 'form';
$route['form/tambah'] = 'form/tambah';
// ini route khusus untuk table
$route['table'] = 'table';
$route['default_controller'] = 'table';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
