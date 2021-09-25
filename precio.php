<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $precio = $_POST['precio'];
    $sql="UPDATE curso
          SET precio='$precio'
          WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: editar.php");
    }
?>