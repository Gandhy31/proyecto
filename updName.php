<?php
    include("conexion.php");
    $conn = conectar();
    $name = $_POST['nombres'];
    $id = $_POST['id'];
    $sql = "UPDATE usuario 
            SET nombres='$name'
            WHERE id='$id'";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: usuario.php?id=$id");

    }
?>