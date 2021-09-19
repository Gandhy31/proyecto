<?php
    include("conexion.php");
    $conn = conectar();
    $date = $_POST['fecha'];
    $id = $_POST['id'];
    $sql = "UPDATE usuario 
            SET fecNac='$date'
            WHERE id='$id'";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: usuario.php?id=$id");

    }
?>