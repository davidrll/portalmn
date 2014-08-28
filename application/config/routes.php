<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "inicio";
$route['404_override'] = '';

$route['suscripcion'] = "inicio/suscripcion";

#ENRUTAMOS LOS VIDEOS DE YOUTUBE
$route['videos/(:num)/(:any)'] = "videos/index/$1/$2";
$route['videos/(:num)'] = "inicio/salir";
$route['videos/'] = "inicio/salir";

#ENRUTAMOS LAS NOTICIAS
$route['noticias'] = "noticia/noticias";
$route['noticia/(:num)/(:any)'] = "noticia/index/$1/$2";
$route['noticia/(:num)'] = "inicio/salir";
$route['noticia/'] = "inicio/salir";

#ENRUTAMOS LA GALERIA
$route['galeria-publicitaria'] = "galeria/galerias";
$route['galeria/(:any)/(:num)/(:any)'] = "galeria/galeria/$1/$2/$3";
$route['galeria/(:any)/(:num)'] = "inicio/salir";
$route['galeria/(:any)'] = "inicio/salir";
$route['galeria/'] = "inicio/salir";


#ENRUTAMOS A TODOS LOS ESPECIALISTAS
$route['especialistas'] = "especialista/especialistas";
$route['especialista/(:num)/(:any)'] = "especialista/index/$1/$2";
$route['especialista/(:num)'] = "inicio/salir";
$route['especialista/'] = "inicio/salir";

$route['nota/(:num)/(:any)'] = "especialista/nota/$1/$2";
$route['nota/(:num)'] = "inicio/salir";
$route['nota/'] = "inicio/salir";


#ENRUTAMOS LAS NOTICIAS CON ERROR
$route['noticiaerror/(:num)/(:any)'] = "noticiaerror/index/$1/$2";
$route['noticiaerror/(:num)'] = "inicio/salir";
$route['noticiaerror/'] = "inicio/salir";

#BUQEUDAS
$route['buscar/'] = "buscador/filtrar";


/* End of file routes.php */
/* Location: ./application/config/routes.php */