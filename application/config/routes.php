<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/* Guide Routes */

$route['guides/creer'] = 'guides/creer';
$route['guides'] = 'guides/tous';
$route['guides/modifier/(:any)'] = 'guides/modifier/$1';
$route['guides/effacer/(:any)'] = 'guides/effacer/$1';

/* Abris Routes */

$route['abris/creer'] = 'abris/creer';
$route['abris/add'] = 'abris/add';
$route['abris'] = 'abris/tous';
$route['abris/modifier/(:any)'] = 'abris/modifier/$1';
$route['abris/effacer/(:any)'] = 'abris/effacer/$1';

/* Sommets Routes */

$route['sommets/creer'] = 'sommets/creer';
$route['sommets'] = 'sommets/tous';
$route['sommets/modifier/(:any)'] = 'sommets/modifier/$1';
$route['sommets/effacer/(:any)'] = 'sommets/effacer/$1';

/* Vallees Routes */

$route['vallees/creer'] = 'vallees/creer';
$route['vallees'] = 'vallees/tous';
$route['vallees/modifier/(:any)'] = 'vallees/modifier/$1';
$route['vallees/effacer/(:any)'] = 'vallees/effacer/$1';

/* Ascensions Routes */

$route['ascensions/creer'] = 'ascensions/creer';
$route['ascensions'] = 'ascensions/tous';
$route['ascensions/modifier/(:any)/(:any)'] = 'ascensions/modifier/$1/$2';
$route['ascensions/effacer/(:any)/(:any)'] = 'ascensions/effacer/$1/$2';



/* Autres Routes */
$route['default_controller'] = 'home/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
