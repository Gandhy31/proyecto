<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $idAd = $_GET['idAd'];
    $sql = "DELETE 
            FROM mensaje 
            WHERE id='$id'";
    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: admin1.php?id=$idAd");

    }
?>