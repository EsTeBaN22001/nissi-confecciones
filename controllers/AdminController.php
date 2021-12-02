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
      $alerts = $admin->validateNewAccount();

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

            $admin->authenticate();
            
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
}

?>