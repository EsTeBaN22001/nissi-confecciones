<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AboutController;
use Controllers\IndexController;
use MVC\Router;

$router = new Router();

// Página index
$router->get('/', [IndexController::class, 'index']);

// Página about
$router->get('/about-us', [AboutController::class, 'index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();