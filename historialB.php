<?php
    include("conexion.php");
    $conn = conectar();
    session_start();
    if(!isset($_SESSION['idG'])){
        header("Location: index.php");
    }
    $id = $_GET['id'];
    $sql = "SELECT curso.nombre, curso.descripcion, factura.fecha, factura.total, factura.activo, factura.id
            FROM curso INNER JOIN factura
            ON curso.id=factura.idCurso AND factura.idUsuario='$id'";
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

    <title>Historial de Compras</title>
  </head>
  <body>
    <h1>Historial de compras</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha</th>
            <th scope="col">Precio</th>
            <th scope="col">Pago</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
             <tr>
                <th><?php  echo $row['nombre']?></th>
                <th><?php  echo $row['descripcion']?></th>
                <th><?php  echo $row['fecha']?></th>
                <th><?php  echo $row['total']?></th>
                <th>
                    <?php  
                        if($row['activo']==0){
                            echo "Pago pendediente";
                        }else{
                            echo "Pagado";
                        }
                    ?>
                </th>
                <th><a href="factura.php?idF=<?php echo $row['id']?>&id=<?php echo $id ?>" class="btn btn-info">Factura</a></th>
                <th><a href="https://wa.me/593980264931?text=Me%20interesa%20el%20Curso%20de%20Maquillaje%20Profesional%20Online" target="_blank" class="btn btn-info">Realizar pago</a></th>
            </tr>
         <?php 
            }
        ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>