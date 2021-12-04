<?php 

namespace Model;
use Model\ActiveRecord;

class Product extends ActiveRecord{
  // Base de datos
  protected static $tabla = 'products';
  protected static $columnsDB = ['id', 'title', 'image', 'description', 'price', 'createdBy'];

  public $id;
  public $image;
  public $title;
  public $description;
  public $price;
  public $createdBy;

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->title = $args['title'] ?? '';
    $this->image = $args['image'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->price = $args['price'] ?? 0;
    $this->createdBy = $args['createdBy'] ?? '';
  }

  // Validar nueva cuenta de administrador
  public function validateProduct(){
    if(!$this->image){
      self::$alerts['error'][] = 'La imagen es obligatoria';
    }
    if(!$this->title){
      self::$alerts['error'][] = 'El título es obligatorio';
    }
    if(!$this->description){
      self::$alerts['error'][] = 'La descripción es obligatoria';
    }
    if(!$this->price){
      self::$alerts['error'][] = 'El precio es obligatorio';
    }
    if(!$this->createdBy){
      self::$alerts['error'][] = 'Debes elejir quien creó este producto';
    }
    return self::$alerts;
  }

  public function saveProduct(){

    $query = "INSERT INTO products ( title, image, description, price, createdBy) VALUES ('$this->title', '$this->image', '$this->description', $this->price, $this->createdBy)";

    $result = self::$db->query($query);
    return [
        'result' =>  $result,
        'id' => self::$db->insert_id
    ]; 

  }

}

?>