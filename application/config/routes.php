<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';

$route['user'] = 'user/userlist';

$route['404_override'] = 'template/error/error_404';

$route['translate_uri_dashes'] = FALSE;
