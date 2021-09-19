<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $idc = $_GET['idc'];
    $sql1 = "SELECT precio
             FROM curso
             WHERE id= $idc";
    $query1=mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($query1);
    $precio = $row['precio'];
    $sql = "INSERT factura(idUsuario, idCurso, total, iva, activo)
            VALUES('$id', '$idc', '$precio', FALSE, FALSE)";
    $squery=mysqli_query($conn, $sql);
    if($squery){

        header("Location: historial.php?id=$id");

    }
?>