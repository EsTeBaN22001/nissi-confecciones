<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\IndexController;
use Controllers\LoginController;
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
$router->post('/contact-us', [IndexController::class, 'contactUs']);

// Login para administradores
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);

// Sección de administradores
$router->get('/admin', [AdminController::class, 'index']);

$router->get('/admin/list-admins', [AdminController::class, 'listAdmins']);

$router->get('/admin/create-admin', [AdminController::class, 'createAdmin']);
$router->post('/admin/create-admin', [AdminController::class, 'createAdmin']);

$router->get('/admin/edit-admin', [AdminController::class, 'editAdmin']);
$router->post('/admin/edit-admin', [AdminController::class, 'editAdmin']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();