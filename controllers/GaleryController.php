<?php 

namespace Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Model\ActiveRecord;
use Model\Admin;
use Model\Galery;
use MVC\Router;

class GaleryController extends ActiveRecord{

  public static function listImages(Router $router){

    // Obtener todas las imágenes
    $images = Galery::all();
		
    // Reemplazar el id del creador(Admin) por el nombre y apellido
    // Ej: $idAdmin = 1 === $resultName = Esteban Redón
		foreach($images as $image){
			
			$idImage = $image->createdBy;
			$result = Admin::find($idImage);
			$image->createdBy = $result->name . " " . $result->surname;

		}

    $router->renderAdmin('admin/galery/list-images', [
      'images' => $images
    ]);

  }

  public static function createImage(Router $router){

    // Crea una nueva instancia de Galery
    $image = new Galery();

    $admins = Admin::all();

    // Crea un array con las alertas
    $alerts = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      $image->sincronizar($_POST);

      $alerts = $image->validateGalery();

      /**SUBIDA DE ARCHIVOS */
			// Generar nombre único para las imágenes
			$nameImage = md5(uniqid(rand(), true)). ".jpg";

			// Setear la imagen
			// Realiza un resize a la imagen con intervention
			if($_FILES['image']['tmp_name']){
				$img = Image::make($_FILES['image']['tmp_name'])->fit(800, 600);
				$image->setImage($nameImage, GALERY_IMAGES_FORLDER);
			}

      if(empty($alerts)){

				// Crear la carpeta para subir imagenes
				if(!is_dir(GALERY_IMAGES_FORLDER)){
          mkdir(GALERY_IMAGES_FORLDER);
        }

        // Guarda la imagen en el servidor
        $img->save(GALERY_IMAGES_FORLDER . $nameImage);

        // Crear alerta
        $result = $image->createImage();

        if($result){
          $image::setAlerta('success', 'La imagen se creó correctamente');
        }else{
          $image::setAlerta('error', 'Hubo un error al crear la imagen');
        }
      }
      

      
    }
    
    $alerts = $image::getAlertas();
    
    $router->renderAdmin('admin/galery/create-image', [
      'image' => $image,
      'admins' => $admins,
      'alerts' => $alerts
    ]);

  }

  public static function editImage(Router $router){

    // Validación y sanitización de la URL por Id válido
    $id = validateORedirect('/admin');

    // Busca la imagen por su id
    $image = Galery::find($id);

    // Obtiene todos los administradores
    $admins = Admin::all();

    // Crea un array con las alertas
    $alerts = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $image->sincronizar($_POST);
      $alerts = $image->validateGalery();
      
      // Subida de archivos
			// Generar nombre único para las imágenes
			$nameImage = md5(uniqid(rand(), true)). ".jpg";
			
			if($_FILES['image']['tmp_name']){
				$img = Image::make($_FILES['image']['tmp_name'])->fit(800, 600);
				$image->setImage($nameImage, GALERY_IMAGES_FORLDER);
			}

      if(empty($alerts)){
        // Almacenar la imagen
				if ($_FILES['image']['tmp_name']){
					$img->save(GALERY_IMAGES_FORLDER . $nameImage);
				}
        
				$result = $image->updateImage();

				if($result){
					$image::setAlerta('success', 'Se actualizó correctamente la imagen');
				}else{
					$image::setAlerta('error', 'Hubo un problema al actualizar la imagen');
        }
      }

    }

    $alerts = Galery::getAlertas();

    $router->renderAdmin('admin/galery/edit-image', [
      'image' => $image,
      'admins' => $admins,
      'alerts' => $alerts
    ]);
    
  }

  public static function delImage(){
    
		$id = $_POST['id'];
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if($_SERVER['REQUEST_METHOD'] = 'POST'){
			$image = Galery::find($id);
			$image->deleteImage(GALERY_IMAGES_FORLDER);
			$result = $image->eliminar();
			if($result){
				header('Location: /admin/list-images');
			}
		}

  }

}

?>
