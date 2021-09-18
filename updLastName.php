<?php
    include("conexion.php");
    $conn = conectar();
    $apellidos = $_POST['apellidos'];
    $id = $_POST['id'];
    $sql = "UPDATE usuario 
            SET apellidos='$apellidos'
            WHERE id='$id'";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: usuario.php?id=$id");

    }
?>