<?php
include 'juegodb.php';
$juego = new juegodb();

$juego->actualizarUsuario($_POST['Nombre'],$_POST['Apellidos'],$_POST['Edad'],$_POST['Curso'],$_POST['Puntuacion']);
echo "El usuario ".$_POST['Nombre']." ha sido actualizado";
 ?>
