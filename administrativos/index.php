<?php include '../template/header.php' ?>

<div class="container card">
<?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {

      ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Usuario Registrado!</strong> Puede iniciar sesión.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php
      }
      ?>
      <form class="p-4" >
      <a class="btn btn-primary" href="loginadm.php" role="button">INICIO DE SESION</a>
      <a class="btn btn-primary" href="../index.php" role="button">INICIO</a>  
      </form>

      <div class="container card">
        <div class="mt-5 text-primary text-center">
          <h1>Registrar Administrativos</h1>
        </div>
        <form class="p-4" method="POST" action="registrar.php">
          <div class="mb-3">
            <label class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="txtNombre" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Apellido: </label>
            <input type="text" class="form-control" name="txtApellido" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Cargo: </label>
            <input type="text" class="form-control" name="txtCargo" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Documento: </label>
            <input type="number" class="form-control" name="txtDocumento" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Correo: </label>
            <input type="email" class="form-control" name="txtCorreo" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="password" class="form-control" name="txtPass" autofocus required>
          </div>
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-primary" value="Registrar">
          </div>
        </form>
      </div>
<?php include '../template/footer.php' ?>