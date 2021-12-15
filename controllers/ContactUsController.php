<?php 

namespace Controllers;

use Model\ActiveRecord;
use Model\Contact;
use MVC\Router;

class ContactUsController extends ActiveRecord{

  public static function index(Router $router){
    
    // Creación de una instancia del contactUs
    $contactUs = new Contact();

    // Arreglo con las alertas
    $alerts = [];
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      // Sicronizar los argumentos del post del form
      $contactUs->sincronizar($_POST);

      // Verificar los argumentos pasados por post
      $alerts = $contactUs->validateForm();

      if(empty($alerts)){

        // Almacenar el mensaje en la base de datos
        $result = $contactUs->createMessage();

        if($result){
          // Enviar alerta de éxito
          $contactUs::setAlerta('success', 'Se envió el mensaje correctamente');
        }

      }

    }

    // Obtener todas las alertas
    $alerts = $contactUs::getAlertas();

    $router->render('contact-us/index', [
      'contactUs' => $contactUs,
      'alerts' => $alerts
    ]);
  }
}

?>