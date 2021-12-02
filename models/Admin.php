<?php 

namespace Model;

class Admin extends ActiveRecord{
  // Base de datos
  protected static $tabla = 'users';
  protected static $columnsDB = ['id', 'name', 'surname', 'email', 'password'];

  public $id;
  public $name;
  public $surname;
  public $email;
  public $password;
  public $level;

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->surname = $args['surname'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->level = $args['level'] ?? '';
  }

  // Validar el inicio de sesión de un usuario
  public function validateLogin(){
    if(!$this->email){
      self::$alerts['error'][] = 'El email es obligatorio';
    }

    if(!$this->password){
      self::$alerts['error'][] = 'La contraseña es obligatorio';
    }

    return self::$alerts;
  }

  // Validar el email para recuperar contraseña
  public function validateNewAccount(){
    if(!$this->name){
      self::$alerts['error'][] = 'El nombre es obligatorio';
    }
    if(!$this->surname){
      self::$alerts['error'][] = 'El apellido es obligatorio';
    }
    if(!$this->email){
      self::$alerts['error'][] = 'El email es obligatorio';
    }
    if(!$this->password){
      self::$alerts['error'][] = 'La contraseña es obligatoria';
    }
    if(strlen($this->password) < 6){
      self::$alerts['error'][] = 'La contraseña debe tener al menos 6 caracteres';
    }
    if(strlen($this->password) > 20){
      self::$alerts['error'][] = 'La contraseña puede tener máximo 20 caracteres';
    }
    return self::$alerts;
  }

  // Revisa si el usuario existe
  public function userExists(){
    $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";
    
    $result = self::$db->query($query);
    
    if($result->num_rows){
      self::$alerts['error'][] = 'El usuario ya está registrado';
    }

    return $result;
  }

  // Validar contraseña
  public function validatePassword(){
    if(!$this->password){
      self::$alerts['error'][] = 'La contraseña es obligatorio';
    }

    if(strlen($this->password) < 6){
      self::$alerts['error'][] = 'La contraseña debe tener al menos 6 caracteres';
    }
    
    return self::$alerts;
  }

  // Hashea la contraseña
  public function hasHPassword(){
    $this->password = password_hash($this->password, PASSWORD_BCRYPT);
  }

  // Crea un token único
  public function createToken(){
    $this->token = uniqid();
  }

  // Comprobar la contraseña y verificación del usuario
  public function checkPassAndVer($password){
    
    $result = password_verify($password, $this->password);
    
    if(!$result || !$this->confirmed){
      self::$alerts['error'][] = 'Contraseña incorrecta';
    }else{
      return true;
    }
  }

}

?>