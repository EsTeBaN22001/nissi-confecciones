<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\IndexController;
use MVC\Router;

$router = new Router();

// Página index
$router->get('/', [IndexController::class, 'index']);

// Página about
$router->get('/about-us', [IndexController::class, 'about']);

// Página galery
$router->get('/galery', [IndexController::class, 'galery']);

// Página contact-us
$router->get('/contact-us', [IndexController::class, 'contactUs']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();