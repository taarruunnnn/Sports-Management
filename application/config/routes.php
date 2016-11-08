<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'User_Authentication';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Admin Part
    $route['Dashboard']='User_Authentication/dashboard';
    $route['checklogin']='Admin/checklogin';
    $route['user_authentication']='User_Authentication/user_login_process';
    $route['logout']='User_Authentication/logout';
    $route['Registration']='User_Authentication/user_registration_show';
    $route['newlogin']='User_Authentication';
    
    $route['PTTeacher']='Admin/PTteachers';
    $route['add_PTteacher']='Admin/add_PTteacher';
    $route['insertPTteacher']='Admin/insertPTteacher';
    $route['PTCurriculum']='Admin/PTCurriculum';
    
    $route['ClassTeacher']='Admin/Class_teachers';
    $route['Parents']='Admin/Parents';
    $route['Students']='Admin/Students';
    $route['Lessions']='Admin/Lessions';
    $route['add_Lessions']='Admin/add_Lessions';
    $route['insertLession']='Admin/insertLession';
    
/*$route['Dhana']='Admin/dhana';

$route['Dashboard']='Admin/dashboard';
$route['/']='Admin';




$route['new_user_registration']='User_Authentication/new_user_registration';
$route['upload'] = 'User_Authentication/do_upload';
$route['facebook']='Social';*/
