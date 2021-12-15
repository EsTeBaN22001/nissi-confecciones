<?php 

namespace Controllers;

use Model\Category;
use Model\Galery;
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

    // Obtiene todos los productos
    $products = Product::all();

    // Obtiene todas las categorías
    $categories = Category::all();

    foreach($products as $product){
      // Cambiar el id de la categoría por el nombre de la misma
			$idCategory = $product->category;
			$resultCategory = Category::find($idCategory);
			$product->category = $resultCategory->category;
    }
    
    $router->render('products/index', [
      'products' => $products,
      'categories' => $categories
    ]);

  }

  public static function about(Router $router){
    $router->render('about/index');
  }

  public static function galery(Router $router){

    $images = Galery::all();
    
    $router->render('galery/index', [
      'images' => $images
    ]);
  }

}

?>