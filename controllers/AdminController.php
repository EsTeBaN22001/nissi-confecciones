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

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    }
    
    $router->renderAdmin('admin/create-admin');
  }
}

?>