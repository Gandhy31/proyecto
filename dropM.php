<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $sql = "DELETE 
            FROM mensaje 
            WHERE id='$id'";
    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: admin1.php");

    }
?>