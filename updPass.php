<?php
    include("conexion.php");
    $conn = conectar();
    $pass = $_POST['password'];
    $id = $_POST['id'];
    $sql = "UPDATE usuario 
            SET contrasena='$pass'
            WHERE id='$id'";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: usuario.php?id=$id");

    }
?>