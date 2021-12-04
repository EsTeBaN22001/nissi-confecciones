<?php

define('PRODUCT_IMAGES_FOLDER', $_SERVER['DOCUMENT_ROOT'] . "/productsImages/");

function debuguear($variable) : string {
	echo "<pre>";
	var_dump($variable);
	echo "</pre>";
	exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
	$s = htmlspecialchars($html);
	return $s;
}

function validateORedirect($url){

	$id = $_GET['id'];
	$id = filter_var($id, FILTER_VALIDATE_INT);

	if(!$id){
		header("Location: ${url}");
	}

	return $id;

}