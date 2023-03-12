<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');

    // usuario: gestorformulario      id20325422_bd_formulario
    // basededatos: bd_formulario        id20325422_gestorformulario
    // contraseña: gahI1Whh72?%Q0PY

    $_DATA = json_decode(file_get_contents("php://input"), true);
    
    $conexion = new PDO('mysql:host=localhost;dbname=id20325422_bd_formulario', "id20325422_gestorformulario", "gahI1Whh72?%Q0PY");
    $query = $conexion->prepare("INSERT INTO `tb_informacion`(`nombre`, `correo`, `celular`, `mensaje`) VALUES (:NombreUsuario,:CorreoElectronico,:Celular,:Mensaje)");
    $query->execute($_DATA);

    echo json_encode([
        "Datos guardados" => $query->rowCount(), 
        "servidor"=> $_SERVER["HTTP_HOST"]
    ],JSON_PRETTY_PRINT);
?>


