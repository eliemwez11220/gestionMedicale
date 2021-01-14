<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//default controller
$route['default_controller'] = 'security/session';
$route['(:any)'] = 'security/session/$1';


$route['404_override'] = 'Errors/error404';
$route['translate_uri_dashes'] = FALSE;
