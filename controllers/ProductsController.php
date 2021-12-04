<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Admin;
use MVC\Router;
use Model\Product;
use Intervention\Image\ImageManagerStatic as Image;

class ProductsController extends ActiveRecord{

	public static function listProducts(Router $router){

		// Obtiene todas los productos
		$product = new Product();
		$products = $product::all();

		$router->renderAdmin('admin/products/list-products', [
			'products' => $products
		]);
	}

	public static function createProduct(Router $router){
		
		// Obtiene todos los admins
		$admin = new Admin();
		$admins = $admin::all();

		// Crea una nueva instancia de un producto nuevo
		$product = new Product();

		// Array con las alertas
		$alerts = [];

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			// Sincronizo los datos del producto con le post del formulario
			$product->sincronizar($_POST);

			/**SUBIDA DE ARCHIVOS */
			// Generar nombre único para las imágenes
			$nameImage = md5(uniqid(rand(), true)). ".jpg";

			// Setear la imagen
			// Realiza un resize a la imagen con intervention
			if($_FILES['image']['tmp_name']){
				$image = Image::make($_FILES['image']['tmp_name'])->fit(800, 600);
				$product->setImage($nameImage);
			}
			

			$alerts = $product->validateProduct();

			if(empty($alerts)){

				// Crear la carpeta para subir imagenes
				if(!is_dir(PRODUCT_IMAGES_FOLDER)){
						mkdir(PRODUCT_IMAGES_FOLDER);
				}
				
				// Guarda la imagen en el servidor
				$image->save(PRODUCT_IMAGES_FOLDER . $nameImage);

				// Guardar en la base de datos
				$result = $product->saveProduct();

				if($result){
					$product::setAlerta('success', 'El producto se creó correctamente');
				}
			}

		}

		$alerts = $product::getAlertas();

		$router->renderAdmin('admin/products/create-product', [
			'product' => $product,
			'admins' => $admins,
			'alerts' => $alerts
		]);
		
	}

}

?>