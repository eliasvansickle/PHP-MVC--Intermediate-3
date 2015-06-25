<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['new'] = 'products/new_product';
$route['show/(:num)'] = 'products/show/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//end of routes.php