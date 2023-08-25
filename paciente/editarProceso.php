<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
      header('Location: index.php?mensaje=error');
      exit();
    }

    include '../model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $documento = $_POST["txtDocumento"];
    $correo = $_POST["txtCorreo"];
    $password = $_POST["txtPass"];  
    $sentencia = $bd ->prepare("UPDATE paciente SET nombre = ?, apellido = ?, documento = ?, correo = ?, contra = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre,$apellido,$documento,$correo,$password,$codigo]);

    if ($resultado === TRUE) {
      header('Location: homespaciente.php?mensaje=editado');
    } else {
      header('Location: homespaciente.php?mensaje=error');
      exit();
    }
    
?>