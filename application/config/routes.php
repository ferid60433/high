<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['login'] = 'auth';
$route['logout'] = 'auth/logout';
$route['404_override'] = 'custom404';
$route['translate_uri_dashes'] = FALSE;
