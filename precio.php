<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $idC = $_POST['idC'];
    $precio = $_POST['precio'];
    $sql="UPDATE curso
          SET precio='$precio'
          WHERE id = '$idC'";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: admin1.php?id=$id");
    }
?>