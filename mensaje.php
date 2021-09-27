<?php
    include("conexion.php");
    $conn = conectar();
    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $msj = $_POST['mensaje'];
    $sql = "INSERT mensaje(nombres, email, asunto, mensaje)
            VALUES ('$nombres', '$email', '$asunto', '$msj')";

    $squery=mysqli_query($conn, $sql);
    if($squery){
        $men=0;
        Header("Location: index.php?men=$men");

    }
?>