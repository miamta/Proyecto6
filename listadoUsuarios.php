<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
  </head>
  <body>
    <button><a href="Index.php">Formulario</a></button>
    <button><a href="listadoUsuarios.php">ListadoUsuario</a></button>
    <?php
    echo "<a href='actualizarUsuario.php?Nombre=".$fila['Nombre']."&Apellidos=".$fila['Apellidos']."&Edad=".$fila['Edad']."&Curso=".$fila['Curso']."&Puntuacion=".$fila['Puntuacion']."'>ACTUALIZAR</a><br><br>";
    echo "<a href='borrarUsuario.php?Nombre=".$fila['Nombre']."&Apellidos=".$fila['Apellidos']."&Edad=".$fila['Edad']."&Curso=".$fila['Curso']."&Puntuacion=".$fila['Puntuacion']."'>BORRAR</a>";
    ?>



    <h3>Datos de usuarios</h3>
    <?php
    // conexion a la BD
  include "juegodb.php";
  $juego = new juegodb();

   $resultado=$juego->listarUsuarios();

   while($fila=$resultado->fetch_assoc()){
          echo "Nombre: ".$fila["Nombre"]."<br>";
          echo "Apellidos: ".$fila["Apellidos"]."<br>";
          echo "Edad: ".$fila["Edad"]."<br>";
          echo "Curso: ".$fila["Curso"]."<br>";
          echo "Puntuacion: ".$fila["Puntuacion"]."<br>";
          echo "<hr>";

   }






     ?>

  </body>
</html>
