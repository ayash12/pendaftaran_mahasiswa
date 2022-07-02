<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

//login
$route['admin'] = 'login_admin';
$route['daftar'] = 'daftar';
$route['admin/cek'] = 'login_admin/cek';

// frond 
$route['cek'] = 'login/cek';
$route['logout'] = 'login/logout';

// $route['cek'] = 'Login/ceks';

$route['anggota'] = 'anggota';
$route['pendaftar'] = 'pendaftaran/main';

$route['pendaftar_save'] = 'daftar/save';

$route['status'] = 'Cekdaftar';
$route['status/hasil'] = 'Cekdaftar/hasil';

$route['pendaftar/update/(:any)'] = 'pendaftaran/update_form/$1';
$route['pendaftar/delete/(:any)'] = 'pendaftaran/delete/$1';

$route['pendaftar/cek'] = 'login/pendaftar_cek';
$route['pendaftar/update'] = 'pendaftaran/update';






