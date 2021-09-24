<?php
    include("conexion.php");
    $conn = conectar();
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $sql1 = "SELECT*
            FROM usuario
            WHERE usuario='$user'";
    $query1=mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($query1);
    $id = $row1['id'];

    if(($row1['usuario']==$user)&&($row1['contrasena']==$pass)){   
        session_start();
        $_SESSION['idG']=$id;     
        Header("Location: index2.php?id=$id");
    }else{
        $e=1;
        Header("Location: login.php?e=$e");
    }
?>