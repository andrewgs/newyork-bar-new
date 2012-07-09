<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$route['default_controller'] = "users_interface";
$route['404_override'] = '';

/***************************************************	USERS INTRERFACE	***********************************************/

$route[''] 			= "users_interface/index";
$route['about'] 	= "users_interface/about";
$route['menu'] 		= "users_interface/menu";
$route['menu/:any'] = "users_interface/menu";
$route['afisha'] 	= "users_interface/afisha";
$route['contacts'] 	= "users_interface/contacts";
$route['admin'] 	= "users_interface/admin_login";

/***************************************************	ADMIN INTRERFACE	***********************************************/

$route['admin-panel/logoff'] 				= "admin_interface/admin_logoff";

$route['admin-panel/actions/control'] 		= "admin_interface/admin_panel";
$route['admin-panel/actions/cabinet'] 		= "admin_interface/admin_cabinet";

$route['admin-panel/actions/food-category/list'] 		= "admin_interface/food_category_list";
$route['admin-panel/actions/food-category/id/:num'] 	= "admin_interface/food_category_info";

$route['admin-panel/actions/food-category/delete-category/:num'] 		= "admin_interface/food_category_delete";
$route['admin-panel/actions/food-category/id/:num/delete-food/:num'] 	= "admin_interface/food_delete";

$route['admin-panel/actions/text-block/menu'] 	= "admin_interface/edit_text_block";
$route['admin-panel/actions/text-block/about'] 	= "admin_interface/edit_text_block";
