<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Usuarios</title>
  </head>
  <body>
    <button><a href="Index.php">Formulario</a></button>
    <button><a href="listadoUsuarios.php">ListadoUsuario</a></button>



    <h3>Usuarios insertados:</h3>
    <?php
    // conexion a la BD
  include "juegodb.php";
  $juego = new juegodb();

   $resultado = $juego->InsertarUsuarios($_POST["Nombre"],$_POST["Apellidos"],$_POST["Edad"],$_POST["Curso"],$_POST["Puntuacion"]);
   // Muestra el ultimo jugador insertado
   $resultado = $juego->mostrarUltimo($_POST["Nombre"]);
   // echo "Usuario Insertado correctamente";
   foreach ($resultado as $fila){
 		echo "Nombre: ".$fila['Nombre']."<br>";
 	}
  // Links para actualizar y borrar
  echo "<a href='actualizarUsuario.php?Nombre=".$fila['Nombre']."&Apellidos=".$fila['Apellidos']."&Edad=".$fila['Edad']."&Curso=".$fila['Curso']."&Puntuacion=".$fila['Puntuacion']."'>ACTUALIZAR</a><br><br>";
	echo "<a href='borrarUsuario.php?Nombre=".$fila['Nombre']."&Apellidos=".$fila['Apellidos']."&Edad=".$fila['Edad']."&Curso=".$fila['Curso']."&Puntuacion=".$fila['Puntuacion']."'>BORRAR</a>";
     ?>

  </body>
</html>
