<?php include '../template/header.php';

include_once "../model/conexion.php";
include_once "../model/conect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM solicitudes WHERE solicitante = '$id'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
      ///ya tiene registrado un proyecto
    }
    // echo $id;
    ?>
     
<div class="container card">
      <form class="p-4" >
      <a class="btn btn-primary" href="homespaciente.php" role="button">Regresar</a>
      </form>
      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'upload') {

      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Documento subido!</strong> Se agregó el documento.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>
      <div class="mt-5 text-primary text-center">
      <?php if($result->num_rows > 0){
     ?>
      <h1>Editar Cita</h1>
      <?php }else{
     ?>
      <h1>solicitar cita medica</h1>
      <?php }
      
     ?>
      </div>
      <br>

      <form class="p-4" method="POST" action="datossol.php">
      <a class="btn btn-primary btn-lg" href="descargar.php?id=<?php echo $id ?>" role="button">Enviar Documento</a>
      (suba su documento de identidad)<br><br> 

          <div class="mb-3">
            <input type="number" class="form-control" name="txtIdsolicitud" value="<?php echo $id ?>" hidden required>
          </div>
          <div class="mb-3">
            <label class="form-label">Asunto de la Cita </label>
            <input type="text" class="form-control" name="txtNombredoc" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Tipo de Medico </label>
            <input type="text" class="form-control" name="txtAsunto" autofocus required>
          </div>
          <div class="mb-3">
                <label class="form-label">Describa su Motivo </label>
                <textarea type="text" class="form-control" name="txtSolicitud" rows="4" cols="50" 
                  placeholder="Max 100 caracteres" autofocus required></textarea>
                </div>
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-outline-success mt-3 w-100" value="Solicitar Cita">
          </div>
        </form>
      </div>
