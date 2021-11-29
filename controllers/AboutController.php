<?php 

namespace Controllers;

use MVC\Router;

class AboutController{

  public static function index(Router $router){
    $router->render('about/index');
  }
}

?>