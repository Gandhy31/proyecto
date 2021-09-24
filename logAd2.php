<?php
    include("conexion.php");
    $conn = conectar();
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $sql1 = "SELECT*
            FROM admininstrador
            WHERE usuario='$user'";
    $query1=mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($query1);
    $id = $row1['id'];

    if(($row1['usuario']==$user)&&($row1['contrasena']==$pass)){ 
        session_start();
        $_SESSION['idA']=$id;        
        Header("Location: admin1.php");
    }else{
        $e=1;
        Header("Location: logAd.php?e=$e");
    }
?>