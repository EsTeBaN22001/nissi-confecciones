<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Admin;
use MVC\Router;
use Model\Product;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Category;

class ProductsController extends ActiveRecord{

	public static function listProducts(Router $router){

		// Obtiene todas los productos
		$product = new Product();
		$products = $product::all();
		
		foreach($products as $product){
			
			$idAdmin = $product->createdBy;
			$result = Admin::find($idAdmin);
			$product->createdBy = $result->name . " " . $result->surname;

		}

		$router->renderAdmin('admin/products/list-products', [
			'products' => $products
		]);
	}

	public static function createProduct(Router $router){
		
		// Obtiene todos los admins
		$admin = new Admin();
		$admins = $admin::all();

		// Obtiene todas las categorías
		$cateogories = Category::all();

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
				$product->setImage($nameImage, PRODUCT_IMAGES_FOLDER);
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
				}else{
					$product::setAlerta('error', 'Hubo un error al guardar el producto');
				}
			}

		}

		$alerts = $product::getAlertas();

		$router->renderAdmin('admin/products/create-product', [
			'product' => $product,
			'admins' => $admins,
			'categories' => $cateogories,
			'alerts' => $alerts
		]);
		
	}

	public static function editProduct(Router $router){

		// Validación y sanitización de la URL por Id válido
		$id = validateORedirect('/admin');

		// Buscar el producto por su id
		$product = Product::find($id);

		// Obtiene todas las categorías
		$cateogories = Category::all();

		// Obtener todos los administradores
		$admins = Admin::all();

		$alerts = [];

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$product->sincronizar($_POST);
			$alerts = $product->validateProduct();

			// Subida de archivos
			// Generar nombre único para las imágenes
			$nameImage = md5(uniqid(rand(), true)). ".jpg";
			
			if($_FILES['image']['tmp_name']){
				$image = Image::make($_FILES['image']['tmp_name'])->fit(800, 600);
				$product->setImage($nameImage, PRODUCT_IMAGES_FOLDER);
			}

			// Validación
			$alerts = $product->validateProduct();

			// Revisar que el arreglo de errores este vacio
			if(empty($alerts)){
				// Almacenar la imagen
				if ($_FILES['image']['tmp_name']){
					$image->save(PRODUCT_IMAGES_FOLDER . $nameImage);
				}

				$result = $product->updateProduct();
				
				if($result){
					$product::setAlerta('success', 'Se actualizó correctamente el producto');
				}
			}

		}

		$alerts = $product::getAlertas();

		$router->renderAdmin('admin/products/edit-product', [
			'product' => $product,
			'admins' => $admins,
			'categories' => $cateogories,
			'alerts' => $alerts
		]);

	}

	public static function deleteProduct(){

		$id = $_POST['id'];
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if($_SERVER['REQUEST_METHOD'] = 'POST'){
			$product = Product::find($id);
			$product->deleteImage(PRODUCT_IMAGES_FOLDER);
			$result = $product->eliminar();
			if($result){
				header('Location: /admin/list-products');
			}
		}

	}

}

?>