<?php 

namespace Controllers;

use Model\Admin;
use MVC\Router;

class LoginController{

  public static function login(Router $router){
    $alerts = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $auth = new Admin($_POST);
      $alerts = $auth->validateLogin();

      if(empty($alerts)){
        // Comprobar que el usuario exista
        $user = Admin::where('email', $auth->email);
        
        if($user){
          // Verificar la contraseña
          if($user->checkPassAndVer($auth->password)){
            // Autenticar al usuario
            if(!isset($_SESSION)){
              session_start();
            }else{
              session_unset();
            }

            // Almacenar la información del usuario en la variable de session
            $user->authenticate();

            header('Location: /admin');

          }

        }else{
          Admin::setAlerta('error', 'Usuario no encontrado');
        }
      }
    }

    $alerts = Admin::getalertas();
    
    $router->render('login/index', [
      'alerts' => $alerts,
      'session' => $_SESSION
    ]);

  }

  public static function logout(){
    // session_start();
    
    $_SESSION = [];

    header('Location: /');
}

}

?>