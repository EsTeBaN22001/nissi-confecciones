<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function comprobarRutas()
    {
        
        // Proteger Rutas...
        session_start();

        // Arreglo de rutas protegidas...
        $protectedRoutes = ['/admin', '/admin/list-admins', '/admin/create-admin', '/admin/edit-admin', '/admin/delete-admin', '/admin/list-products', '/admin/create-product', '/admin/edit-product', '/admin/delete-product', '/admin/products/list-categories', '/admin/products/create-category', '/admin/products/edit-category', '/admin/products/delete-category', '/admin/list-images', '/admin/create-image', '/admin/edit-image', '/admin/delete-image', '/admin/list-messages', '/admin/list-messages/changeStatus'];

        $auth = $_SESSION['login'] ?? null;

        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }

        if(in_array($currentUrl, $protectedRoutes) && !$auth){
            header('Location: /');
        }

        if ( $fn ) {
            // Call user fn va a llamar una función cuando no sabemos cual sera
            call_user_func($fn, $this); // This es para pasar argumentos
        } else {
            echo "Página No Encontrada o Ruta no válida";
        }
    }

    public function render($view, $datos = [])
    {

        // Leer lo que le pasamos  a la vista
        foreach ($datos as $key => $value) {
            $$key = $value;  // Doble signo de dolar significa: variable variable, básicamente nuestra variable sigue siendo la original, pero al asignarla a otra no la reescribe, mantiene su valor, de esta forma el nombre de la variable se asigna dinamicamente
        }

        ob_start(); // Almacenamiento en memoria durante un momento...

        // entonces incluimos la vista en el layout
        include_once __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean(); // Limpia el Buffer
        include_once __DIR__ . '/views/layout.php';
    }

    public function renderAdmin($view, $datos = [])
    {

        foreach ($datos as $key => $value){
            $$key = $value;
        }

        ob_start();

        include_once __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean();
        include_once __DIR__ . '/views/layoutAdmin.php';
    }
}