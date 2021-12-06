<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\GaleryController;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\ProductsController;
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

// Listar administradores
$router->get('/admin/list-admins', [AdminController::class, 'listAdmins']);

// Crear administradores
$router->get('/admin/create-admin', [AdminController::class, 'createAdmin']);
$router->post('/admin/create-admin', [AdminController::class, 'createAdmin']);

// Editar administradores
$router->get('/admin/edit-admin', [AdminController::class, 'editAdmin']);
$router->post('/admin/edit-admin', [AdminController::class, 'editAdmin']);

// Eliminar administradores
$router->get('/admin/delete-admin', [AdminController::class, 'deleteAdmin']);
$router->post('/admin/delete-admin', [AdminController::class, 'deleteAdmin']);

// Listar productos
$router->get('/admin/list-products', [ProductsController::class, 'listProducts']);

// Crear productos
$router->get('/admin/create-product', [ProductsController::class, 'createProduct']);
$router->post('/admin/create-product', [ProductsController::class, 'createProduct']);

// Actualizar productos
$router->get('/admin/edit-product', [ProductsController::class, 'editProduct']);
$router->post('/admin/edit-product', [ProductsController::class, 'editProduct']);

// Eliminar productos
$router->get('/admin/delete-product', [ProductsController::class, 'deleteProduct']);
$router->post('/admin/delete-product', [ProductsController::class, 'deleteProduct']);

// Galería de imágenes

// Listar las imágenes
$router->get('/admin/list-images', [GaleryController::class, 'listImages']);

// Crear imágenes
$router->get('/admin/create-image', [GaleryController::class, 'createImage']);
$router->post('/admin/create-image', [GaleryController::class, 'createImage']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
