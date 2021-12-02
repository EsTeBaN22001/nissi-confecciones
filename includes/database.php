<?php

$db = mysqli_connect('localhost', 'root', '', 'carlosGuerraWeb');
$db->set_charset('UTF-8');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    exit;
}
