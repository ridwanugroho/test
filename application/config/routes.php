<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'test';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dbCheck'] = 'test/dbConnect';
$route['validate'] = 'test/validate';
