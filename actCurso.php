<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $sql = "UPDATE factura
            SET activo=TRUE
            WHERE id='$id'";
    $squery=mysqli_query($conn, $sql);
    if($squery){

        header("Location: admin.php");

    }
?>