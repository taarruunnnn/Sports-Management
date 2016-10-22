<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Dhana']='Admin/dhana';
$route['login']='Admin/checklogin';
$route['Dashboard']='Admin/dashboard';
$route['/']='Admin';
$route['newlogin']='User_Authentication';
$route['Registration']='User_Authentication/user_registration_show';
$route['user_authentication']='User_Authentication/user_login_process';
$route['logout']='User_Authentication/logout';
$route['new_user_registration']='User_Authentication/new_user_registration';
$route['upload'] = 'User_Authentication/do_upload';
$route['facebook']='Social';
