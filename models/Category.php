<?php 

namespace Model;

class Category extends ActiveRecord{

  // Base de datos
  protected static $tabla = 'categories';
  protected static $columnsDB = ['id', 'category'];

  public $id;
  public $category;

  public function __construct($args = [])
  {
    $this->id = $args['id'] ?? null;
    $this->category = $args['category'] ?? '';
  }

  public function validateCategory(){
    if(!$this->category){
      self::$alerts['error'][] = 'La categoría es obligatoria';
    }

    return self::$alerts;
  }

  public function createCategory(){
    $query = "INSERT INTO categories (category) VALUES ('$this->category')";

    $result = self::$db->query($query);
    return [
      'result' =>  $result,
      'id' => self::$db->insert_id
    ]; 
  }

  public function updateCategory(){
    $query = "UPDATE categories set category = '$this->category' WHERE id = $this->id LIMIT 1";

    $resultado = self::$db->query($query);
    return [
      'resultado' =>  $resultado
    ];
  }

}

?>