<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Blog/home';
$route['home'] = 'Blog/home';
$route['contact'] = 'Blog/contact';
$route['orga'] = 'Blog/orga';
$route['steun-ons'] = 'Blog/steunons';
$route['volunteer'] = 'Blog/volunteer';
$route['news'] = 'Blog/news';
$route['admin'] = 'Blog/welcome';
$route['login'] = 'Blog/login';
$route['show'] = 'Blog/showPage';
$route['add'] = 'Blog/addNews';
$route['logout'] = 'Blog/logout';
$route['allnews'] = 'Blog/allnews';
$route['backAdd'] = 'Blog/backAdd';
$route['backNews'] = 'Blog/backNews';

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

//ADminROUtes

$route['admin/edit/(:any)'] = 'Blog/editPage/$1';
$route['admin/delete/(:any)'] = 'Blog/delete/$1';
$route['admin/editnew'] = 'Blog/editnew';
$route['admin/news'] = 'Blog/adminNews';
