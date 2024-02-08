<?php
   $tittle = 'index';
   require_once 'includes/header.php';

?>

   <h1 class= "text-center">Registro a la conferencia</h1>

   <form method="post" action="success.php">
      <div class="form-group">
         <label for="nombre">Nombre</label>
         <input type="text" class="form-control" id="nombre" name="nombre" >
      </div>
      <div class="form-group">
         <label for="apellido">Apellido</label>
         <input type="text" class="form-control" id="apellido" name="apellido" >
      </div>
      <div class="form-group">
         <label for="dob">Fecha de nacimiento</label>
         <input type="text" class="form-control" id="dob" name="dob" >
      </div>
      <div class="form-group">
         <label for="especialidad">Area de especialidad</label>
         <select class="form-control" id="especialidad" name="especialidad">
            <option value="1">Administrador de base de datos</option>
            <option>Programador</option>
            <option>Administrador web</option>
            <option>Otro</option>
         </select>
      </div>
      <div class="form-group">
         <label for="email">Correo electronico</label>
         <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
         <small id="emailHelp" class="form-text text-muted">Esta informacion es privada.</small>
      </div>
      <div class="form-group">
         <label for="telefono">Telefono</label>
         <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="telefonolHelp">
         <small id="telefonolHelp" class="form-text">Esta informacion es privada.</small>
      </div>
      
      <button type="submit" name="submit" class="btn btn-primary btn-block">enviar</button>
   </form>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>