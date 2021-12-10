<?php 

namespace Controllers;

use Model\Product;
use MVC\Router;

class IndexController{

  public static function index(Router $router){

    $products = Product::get(3);

    $router->render('index', [
      'products' => $products
    ]);
  }

  public static function products(Router $router){

    $products = Product::all();
    
    $router->render('products/index', [
      'products' => $products
    ]);

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