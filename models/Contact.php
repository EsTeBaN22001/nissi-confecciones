<?php 

namespace Model;

class Contact extends ActiveRecord{
  // Base de datos
  protected static $tabla = 'contact';
  protected static $columnsDB = ['id', 'name', 'email', 'affair', 'msg'];

  public $id;
  public $name;
  public $email;
  public $affair;
  public $msg;

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->affair = $args['affair'] ?? '';
    $this->msg = $args['msg'] ?? '';
  }

  // Validar nueva cuenta de administrador
  public function validateForm(){
    if(!$this->name){
      self::$alerts['error'][] = 'El nombre es obligatorio';
    }
    if(!$this->email){
      self::$alerts['error'][] = 'El email es obligatorio';
    }
    if(!$this->affair){
      self::$alerts['error'][] = 'El asunto es obligatorio';
    }
    if(!$this->msg){
      self::$alerts['error'][] = 'El mensaje es obligatorio';
    }

    return self::$alerts;
  }

      // crea un nuevo registro
  public function createMessage() {

    // Insertar en la base de datos
    $query = "INSERT INTO contact (name, email, affair, msg) VALUES ('$this->name', '$this->email', '$this->affair', '$this->msg')";

    // Resultado de la consulta
    $resultado = self::$db->query($query);
    return [
        'resultado' =>  $resultado,
        'id' => self::$db->insert_id
    ];  
  }
  

}

?>