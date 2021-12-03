<?php 

namespace Model;

class Admin extends ActiveRecord{
  // Base de datos
  protected static $tabla = 'users';
  protected static $columnsDB = ['id', 'name', 'surname', 'email', 'password', 'level'];

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
    $this->level = $args['level'] ?? 1;
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

  // Validar nueva cuenta de administrador
  public function validateAccount(){
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
    if(!$this->level){
      self::$alerts['error'][] = 'Elije el nivel de administrador';
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
  public function hashPassword(){
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

  // crea un nuevo registro
  public function crearAdmin() {

    // Insertar en la base de datos
    $query = "INSERT INTO users (name, surname, email, password, level) VALUES ('$this->name', '$this->surname', '$this->email', '$this->password', '$this->level')";

    // Resultado de la consulta
    $resultado = self::$db->query($query);
    return [
        'resultado' =>  $resultado,
        'id' => self::$db->insert_id
    ];  
  }

  // Edita y actualiza un registro de administrador
  public function updateAdmin(){
    $query = "UPDATE users set name = '$this->name', surname = '$this->surname', email = '$this->email', password = '$this->password', level = $this->level WHERE id = $this->id LIMIT 1";

    $resultado = self::$db->query($query);
    return [
      'resultado' =>  $resultado
  ];
  }

  public function authenticate(){
    // session_start();
    session_unset();
    $_SESSION = [];

    // Llenar el arrreglo de sesión
    $_SESSION['name'] = $this->name;
    $_SESSION['surname'] = $this->surname;
    $_SESSION['email'] = $this->email;
    $_SESSION['level'] = $this->level;
    $_SESSION['login'] = true;
  }

}

?>