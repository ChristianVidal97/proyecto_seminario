<?php
    if(!isset($_GET['codigo'])){
      header('Location: ../administrativos/index.php?mensaje=error');
      exit();
    }

    include '../model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM doctores where codigo =?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
      header('Location: ../administrativos/homesdoctor.php?mensaje=eliminado');
    } else {
      header('Location: ../administrativos/homesdoctor.php?mensaje=error');
      exit();
    }
    
?>
