<?php
    include("conexion.php");
    $conn = conectar();
    $email = $_POST['correo'];
    $id = $_POST['id'];
    $sql = "UPDATE usuario 
            SET correo='$email'
            WHERE id='$id'";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: usuario.php?id=$id");

    }
?>