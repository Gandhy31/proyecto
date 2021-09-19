<?php
    include("conexion.php");
    $conn = conectar();
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cel = $_POST['celular'];
    $email = $_POST['email'];
    $fechaN = $_POST['fechaN'];
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $sql1 = "SELECT*
            FROM usuario
            WHERE usuario='$user'";
    $query1=mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($query1);
    if($row1['usuario']==$user){
        
        Header("Location: registro2.php?nombres=$nombres&apellidos=$apellidos&cel=$cel&email=$email&fechaN=$fechaN&user=$user&pass=$pass");
    }else{
        $sql = "INSERT usuario(nombres, apellidos, usuario, contrasena, celular, correo, fecNac)
            VALUES('$nombres', '$apellidos', '$user', '$pass', '$cel', '$email', '$fechaN')";
        $squery=mysqli_query($conn, $sql);

        if($squery){

            Header("Location: index.php");

        }else{
        
        }
    }
?>