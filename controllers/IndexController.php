<?php 

namespace Controllers;

use MVC\Router;

class IndexController{

  public static function index(Router $router){
    $router->render('index');
  }

  public static function about(Router $router){
    $router->render('about/index');
  }

  public static function galery(Router $router){
    $router->render('galery/index');
  }

  public static function contactUs(Router $router){
    $router->render('contact-us/index');
  }
}

?>