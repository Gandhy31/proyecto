<?php
    include("conexion.php");
    $conn = conectar();
    $id=$_GET['id'];
    $sql="SELECT*
          FROM usuario
          WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Curso2</title>
  </head>
  <body>
    <h1>Curso2</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <a class="btn btn-primary" href="compra.php?id=<?php echo $row['id'] ?>&idc=1" role="button">Comprar</a>
  </body>
</html>