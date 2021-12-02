<?php

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

// Valida si hay un id o sino redirecciona
function validarORedireccionar(string $url){
	// Validación y sanitización de la URL por Id válido
	$id = $_GET['id'];
	$id = filter_var($id, FILTER_VALIDATE_INT);

	if(!$id){
		header("location: ${url}");
	}

	return $id;
}