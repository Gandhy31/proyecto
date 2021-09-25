<?php
    include("conexion.php");
    $conn = conectar();
    session_start();
    if(!isset($_SESSION['idA'])){
        header("Location: index.php");
    }
    $id = $_GET['id'];
    $idF = $_GET['idF'];
    $sql = "UPDATE factura
            SET activo=FALSE
            WHERE id='$idF'";
    $squery=mysqli_query($conn, $sql);
    if($squery){

        header("Location: admin1.php?id=$id");

    }
?>