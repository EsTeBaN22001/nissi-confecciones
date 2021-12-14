<?php 

namespace Controllers;

use Model\ActiveRecord;
use Model\Admin;
use MVC\Router;

class AdminController extends ActiveRecord{

  public static function index(Router $router){
    $router->renderAdmin('admin/index');
  }

  public static function listAdmins(Router $router){
    $admin = new Admin();
    $admins = $admin::all();
    $router->renderAdmin('admin/list-admins', [
      'session' => $_SESSION,
      'admins' => $admins
    ]);
  }

  public static function createAdmin(Router $router){

    $admin = new Admin();
    $alerts = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $admin->sincronizar($_POST);
      $alerts = $admin->validateAccount();

      if(empty($alerts)){

        // Verificar si el usuario existe
        $userExists = $admin->userExists();
        
        if($userExists->num_rows){
          $alerts = Admin::getAlertas();
        }else{

          $admin->hashPassword();

          // Crear el usuario
          $result = $admin->crearAdmin();

          if($result){
            
            $admin::setAlerta('success', 'El administrador se creó correctamente');
            
          }

        }

      }

    }

    $alerts = Admin::getAlertas();
    
    $router->renderAdmin('admin/create-admin', [
      'admin' => $admin,
      'alerts' => $alerts
    ]);
  }

  public static function editAdmin(Router $router){

    	// Validación y sanitización de la URL por Id válido
    $id = validateORedirect('/admin');
    
    $admin = Admin::find($id);

    $alerts = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $admin->sincronizar($_POST);
      $alerts = $admin->validateAccount();

      if(empty($alerts)){

        $admin->hashPassword();

        $result = $admin->updateAdmin();

        if($result){
          header('Location: /admin/list-admins');
        }

        

      }

    }


    $router->renderAdmin('admin/edit-admin', [
      'admin' => $admin,
      'alerts' => $alerts
    ]);
  }

  public static function deleteAdmin(){
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      $id = $_POST['id'];
      $id = filter_var($id, FILTER_VALIDATE_INT);

      $admin = Admin::find($id);
      $result = $admin->eliminar();

      if($result){
        header('Location: /admin/list-admins');
      }

    }

  }

}

?>