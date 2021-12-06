<?php 

namespace Model;

class Galery extends ActiveRecord{
  // Base de datos
  protected static $tabla = 'galery';
  protected static $columnsDB = ['id', 'title', 'image', 'createdBy'];

  public $id;
  public $title;
  public $image;

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->title = $args['title'] ?? '';
    $this->image = $args['image'] ?? '';
    $this->createdBy = $args['createdBy'] ?? '';
  }

  public function validateGalery(){
    if(!$this->title){
      self::$alerts['error'][] = 'El título es obligatorio';
    }

    if(!$this->createdBy){
      self::$alerts['error'][] = 'Elije el creador de la imagen';
    }

    return self::$alerts;
  }

  public function createImage(){

    $query = "INSERT INTO galery (title, image, createdBy) VALUES ('$this->title', '$this->image', $this->createdBy)";

    $result = self::$db->query($query);
    
    return [
        'result' =>  $result,
        'id' => self::$db->insert_id
    ]; 

  }
}