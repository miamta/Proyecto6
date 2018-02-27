<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuario</title>
  </head>
  <body>
    <button><a href="Index.php">Formulario</a></button>
    <button><a href="listadoUsuarios.php">ListadoUsuario</a></button>

    <h3>Actualizar usuario</h3>
    <form class="" action="actualizardb.php" method="post">


  Nombre: <input type="text" name="Nombre" value="<?=$_GET['Nombre']?>"><br><br>
  Apellidos: <input type="text" name="Apellidos" value="<?=$_GET['Apellidos']?>"><br><br>
  Edad: <input type="text" name="Edad" value="<?=$_GET['Edad']?>"><br><br>
  Curso: <input type="text" name="Curso" value="<?=$_GET['Curso']?>"><br><br>
  Puntuacion: <input type="text" name="Puntuacion" value="<?=$_GET['Puntuacion']?>"><br><br>

    <input type="submit" name="" value="Enviar">
  </form>
  </body>
</html>
