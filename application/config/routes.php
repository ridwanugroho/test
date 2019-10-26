<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'test';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['update'] = 'test/update';
$route['validate'] = 'test/validate';
$route['session'] = 'test/startSession';
$route['login'] = 'test/gotoLogin';