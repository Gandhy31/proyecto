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

    <title>Historial de Compras</title>
  </head>
  <body>
    <h1>Historial de compras</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Curso</th>
            <th scope="col">Fecha</th>
            <th scope="col">Precio</th>
            <th scope="col">Pago</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
             <tr>
                <th><?php  echo $row['nombres']." ".$row['apellidos']?></th>
                <th><?php  echo $row['nombre']?></th>
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
                <th><a href="
                        <?php 
                            if($row['activo']==0){
                                echo "actCurso";
                            }else{
                                echo "desCurso";
                            }
                        ?>.php?id=<?php echo $row['id']?>" class="btn btn-info">
                        <?php 
                            if($row['activo']==0){
                                echo "Activar Curso";
                            }else{
                                echo "Desactivar Curso";
                            }
                        ?>
                    </a>
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