<?php
    include("conexion.php");
    $conn = conectar();
    session_start();
    if(!isset($_SESSION['idA'])){
        header("Location: index.php");
    }
    $id = $_GET['id'];
    $sql = "UPDATE factura
            SET activo=TRUE
            WHERE id='$id'";
    $squery=mysqli_query($conn, $sql);
    if($squery){

        header("Location: admin2.php");

    }
?>