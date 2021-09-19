<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $idc = $_GET['idc'];
    $sql = "INSERT factura(idUsuario, idCurso, total)
            ;

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: usuario.php?id=$id");

    }
?>