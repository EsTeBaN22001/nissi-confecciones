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
        
      }
    }

    $alerts = Category::getAlertas();

    $router->renderAdmin('admin/products/categories/create-category', [
      'category' => $category,
      'alerts' => $alerts
    ]);

  }

  public static function updateCategory(Router $router){

    // Validación y sanitización de la URL por Id válido
		$id = validateORedirect('/admin');

		// Buscar el producto por su id
		$category = Category::find($id);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $category->sincronizar($_POST);

      $category->validateCategory();

      $result = $category->updateCategory();
      
      if($result){
        $category::setAlerta('success', 'Se actualizó correctamente');
      }
    }

    $alerts = Category::getAlertas();

    $router->renderAdmin('admin/products/categories/edit-category', [
      'category' => $category,
      'alerts' => $alerts
    ]);

  }

  public static function deleteCategory(){

		$id = $_POST['id'];
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$category = Category::find($id);
			$result = $category->eliminar();
			if($result){
				header('Location: /admin/products/list-categories');
			}
		}

	}

}

?>

