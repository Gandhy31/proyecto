<?php
    include("conexion.php");
    $conn = conectar();
    session_start();
    if(!isset($_SESSION['idG'])){
        header("Location: index.php");
    }
    $id=$_GET['id'];
    $sql="SELECT*
          FROM usuario
          WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $cont=0;
    $sql1="SELECT idCurso
           FROM factura
           WHERE idUsuario='$id'";
    $query1 = mysqli_query($conn, $sql1);
    while($row1 = mysqli_fetch_array($query1)){
      if($row1['idCurso']==6){
        $cont=1;
      }
    }
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
    <a class="btn btn-primary 
      <?php 
        if($cont==1){
          echo "disabled";
        } 
        
      ?>" href="compra.php?id=<?php echo $row['id'] ?>&idc=6" role="button" 
      <?php 
        if($cont==1){
          echo "aria-disabled=\"true\" ";
        }
      ?>
    >
      <?php 
        if($cont==1){
          echo "Comprado";
        }else{
          echo "Comprar";
        }
      ?>
    </a>
  </body>
</html>