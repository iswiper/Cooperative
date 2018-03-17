<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home_con/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['inventory'] = 'pages/inventory';
$route['sales'] = 'pages/sales';
$route['new_item'] = 'pages/new_item';
$route['categories'] = 'pages/categories';
$route['accounts'] = 'pages/accounts';
$route['logout'] = 'pages/logout';
$route['localhost/Cooperative'] = 'localhost/Cooperative/inventory';
$route['pos'] = 'pos_con/pos';
$route['daily_sales_report'] = 'sales_con/daily_sales_report';
$route['weekly_sales_report'] = 'sales_con/weekly_sales_report';
$route['monthly_sales_report'] = 'sales_con/monthly_sales_report';
$route['yearly_sales_report'] = 'sales_con/yearly_sales_report';
$route['Signup'] = 'Signup_con/Signup';
