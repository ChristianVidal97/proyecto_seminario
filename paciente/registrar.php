<?php
    print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["ocultaidsolicitud"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellido"])
     || empty($_POST["txtDocumento"]) 
    || empty($_POST["txtCorreo"]) || empty($_POST["txtPass"])){
    echo "faltan datos";
    }

    include_once '../model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $documento = $_POST["txtDocumento"];
    $correo = $_POST["txtCorreo"];
    $password = $_POST["txtPass"];
    $sentencia = $bd ->prepare("INSERT INTO paciente(nombre,apellido,documento,correo,contra,rol) VALUES(?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$documento,$correo,$password,"paciente"]);

    if ($resultado === TRUE) {
      header('Location: ../paciente/index.php?mensaje=registrado');
    } else {
      echo "error";
    }
    
?>
