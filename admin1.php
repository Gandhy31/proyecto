<?php
    include("conexion.php");
    $conn = conectar();
    $conn = conectar();
    session_start();
    if(!isset($_SESSION['idA'])){
        header("Location: index.php");
    }
    $sql = "SELECT usuario.nombres, usuario.apellidos, curso.nombre, factura.fecha, factura.total, factura.activo, factura.id
            FROM usuario INNER JOIN factura
            ON usuario.id=factura.idUsuario INNER JOIN curso 
            ON curso.id=factura.idCurso";
    $query=mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Administrador</title>
  </head>
  <body>
    <h1>Administrador</h1>
    <a class="btn btn-primary" href="admin2.php" role="button">Activar Cursos</a>
    <a class="btn btn-primary" href="admin3.php" role="button">Editar Cursos</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>