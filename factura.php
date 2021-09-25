<?php
    include("conexion.php");
    $conn = conectar();
    $idF = $_GET['idF'];
    $id = $_GET['id'];
    $sql = "SELECT usuario.nombres, usuario.apellidos, factura.id, factura.fecha, factura.total, curso.nombre
            FROM usuario INNER JOIN factura
            ON usuario.id=factura.idUsuario INNER JOIN curso
            ON factura.idCurso=curso.id AND factura.id=$idF";
    $query=mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style_invoice.css" />
</head>

<body>

    <div class="invoice-box">

        <div id="cabecera" class="row">
            <div class="col-md-8">
                <img src="img/logo.jpg" height="220px">
            </div>
            <div class="col-md-4 right mt-5">
                <h1>FACTURA</h1>
                <p class="innum">
                    <strong>Factura #:</strong>
                    <?php echo $row['id'] ?>
                    <br>
                    <strong>Fecha de factura:</strong>
                    <?php echo $row['fecha'] ?>
                    <br>
                    <strong>Dirección:</strong>
                    Quito, Ecuador
                    <br>
                </p>
            </div>
        </div>
        <hr>

        <div id="cuerpo" class="row">
            <div class="col-md-8">

                <strong>Poporcionado por:</strong>
                <p class="innumleft">
                    Inua
                    <br>
                    Calle Gaspar de Escaolna y Av. Juan José de Villalengua
                    <br>
                    Quito, Ecuador
                </p>
            </div>
            <div class="col-md-4 right">
                <strong>Proporcionado a:</strong>
                <p class="innum">
                <?php echo $row['nombres']." ".$row['apellidos'] ?>
                </p>
            </div>
        </div>

        <table class="table">

            <thead class="table-secondary">
                <tr>
                    <th class="left" scope="col">DESCRIPCIÓN</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">IVA</th>
                    <th scope="col">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="left"><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['total'] ?></td>                    
                    <td>0.00</td>                    
                    <td><?php echo $row['total'] ?></td>
                </tr>
                <tr class="table-secondary">
                    <th class="left" scope="row">Total</th>
                    <td><?php echo $row['total'] ?></td>
                    <td>0.00</td>
                    <td>USD <?php echo $row['total'] ?></td>
                </tr>
                <tr class="heading">
                    <td colspan="6">
                        <p class="thanks"></p>
                    </td>
                </tr>
            </tbody>

        </table>


    </div>







    <script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>