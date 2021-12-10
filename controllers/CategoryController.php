<?php 

namespace Controllers;

use Model\ActiveRecord;
use Model\Category;
use MVC\Router;

class CategoryController extends ActiveRecord{

  public static function listCategories(Router $router){

    $categories = Category::all();
    
    $router->renderAdmin('admin/products/categories/list-categories', [
      'categories' => $categories
    ]);

  }

  public static function createCategory(Router $router){

    // Crear una instancia de una categoría
    $category = new Category();

    // Array con las alertas
    $alerts = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $category->sincronizar($_POST);

      $alerts = $category->validateCategory();

      if(empty($alerts)){

        $result = $category->createCategory();
        
        if($result){
          $category::setAlerta('success', 'Se creó la categoría');
        }
        
      }else{
        $category::setAlerta('error', 'No se pudo crear la categoría');
      }
    }

    $alerts = $category::getAlertas();

    $router->renderAdmin('admin/products/categories/create-category', [
      'category' => $category,
      'alerts' => $alerts
    ]);

  }

}

?>

