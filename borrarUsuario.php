<?php
include "juegodb.php";
$juego = new juegodb();

$juego->borrarUsuario($_GET['Nombre']);
echo "El usuario ".$_GET['Nombre']." se ha borrado de la DB";
?>
