<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['translate_uri_dashes'] = FALSE;

//404
$route['404_override'] = 'custom404';

//Auth
$route['login'] = 'auth';


//Admin Routes
$route['admin/(:any)'] = '$1';
$route['admin/(:any)/(:any)'] = '$1/$2';
$route['admin/(:any)/(:any)/(:any)'] = '$1/$2/$3';
$route['admin/(:any)/(:any)/(:any)/(:any)'] = '$1/$2/$3/$4';

