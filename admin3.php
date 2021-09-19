<?php
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT*
            FROM curso";
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

    <title>Editar cursos</title>
  </head>
  <body>
    <h1>Cursos</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
             <tr>
                <th><?php  echo $row['id']?></th>
                <th><?php  echo $row['nombre']?></th>
                <th><?php  echo $row['descripcion']?></th>
                <th><?php  echo $row['precio']?></th>
                <th>
                </th>
                <th>
                </th>
            </tr>
         <?php 
            }
        ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>