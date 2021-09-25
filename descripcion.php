<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $idC = $_POST['idC'];
    $desc = $_POST['desc'];
    $sql="UPDATE curso
          SET descripcion='$desc'
          WHERE id = '$idC'";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: admin1.php?id=$id");
    }
?>