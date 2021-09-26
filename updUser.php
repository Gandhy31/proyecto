<?php
    include("conexion.php");
    $conn = conectar();
    $user = $_POST['usuario'];
    $id = $_POST['id'];
    $sql1 = "SELECT*
            FROM usuario
            WHERE usuario='$user'";
    $query1=mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($query1);
    if($row1['usuario']==$user){
        Header("Location: usuario.php?id=$id&user=$user");
    }else{
        $sql = "UPDATE usuario 
                SET usuario='$user'
                WHERE id='$id'";
        $squery=mysqli_query($conn, $sql);
        if($squery){

            Header("Location: usuario.php?id=$id");
        }
    }
?>
