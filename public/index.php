<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\CategoryController;
use Controllers\GaleryController;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\ProductsController;
use MVC\Router;

$router = new Router();

////////////////////////////////////////////////////////////////////////////////
/////////////////////////////Páginas principales///////////////////////////////
//////////////////////////////////////////////////////////////////////////////
// Página index
$router->get('/', [IndexController::class, 'index']);

// Página products
$router->get('/products', [IndexController::class, 'products']);

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

////////////////////////////////////////////////////////////////////////////////
//////////////////////Sección de administradores///////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$router->get('/admin', [AdminController::class, 'index']);

//////////////////////////////////////////
///////Administradores del sitio/////////
////////////////////////////////////////
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

////////////////////////////////////////
//////////////Productos////////////////
//////////////////////////////////////
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

//////////////////////////////////////
/////////////Categorías//////////////
////////////////////////////////////

// Listar las categorías
$router->get('/admin/products/list-categories', [CategoryController::class, 'listCategories']);

// Crear categoría
$router->get('/admin/products/create-category', [CategoryController::class, 'createCategory']);
$router->post('/admin/products/create-category', [CategoryController::class, 'createCategory']);

// Actualizar categoría
$router->get('/admin/products/edit-category', [CategoryController::class, 'updateCategory']);
$router->post('/admin/products/edit-category', [CategoryController::class, 'updateCategory']);

//////////////////////////////////////
////////Galería de imágenes//////////
////////////////////////////////////
// Listar las imágenes
$router->get('/admin/list-images', [GaleryController::class, 'listImages']);

// Crear imágenes
$router->get('/admin/create-image', [GaleryController::class, 'createImage']);
$router->post('/admin/create-image', [GaleryController::class, 'createImage']);

// Editar imágenes
$router->get('/admin/edit-image', [GaleryController::class, 'editImage']);
$router->post('/admin/edit-image', [GaleryController::class, 'editImage']);

// Eliminar imágen
$router->get('/admin/delete-image', [GaleryController::class, 'delImage']);
$router->post('/admin/delete-image', [GaleryController::class, 'delImage']);

//////////////////////////////////////////////
//////////////Comprobar rutas////////////////
////////////////////////////////////////////
$router->comprobarRutas();
