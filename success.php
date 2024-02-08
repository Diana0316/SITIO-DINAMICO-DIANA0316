<?php
   $tittle = 'success';
   require_once 'includes/header.php';
   require_once 'db/conn.php';

   if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $especialidad = $_POST['especialidad'];
        $isSuccess = $crud->insert($nombre, $apellido, $dob, $email, $telefono, $especialidad);

        if($isSuccess){
            echo '<h1 class="text-center text-success">Registro exitoso</h1>';
        }
        else{
            echo '<h1 class="text-center text-danger">Registro denegado</h1>';
        }
   }

?>

    
    <!--<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_GET['nombre'] . ' ' . $_GET['apellido']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
                <?php //echo $_GET['especialidad']; ?>
            </h6>
            <p class="card-text">
                Fecha de nacimiento: <?php //echo $_GET['dob']; ?>
            </p>
            <p class="card-text">
                Correo electronico: <?php //echo $_GET['email']; ?>
            </p>
            <p class="card-text">
                Telefono: <?php //echo $_GET['telefono']; ?>
            </p>
        </div>
    </div>-->


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['nombre'] . ' ' . $_POST['apellido']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
                <?php echo $_POST['especialidad']; ?>
            </h6>
            <p class="card-text">
                Fecha de nacimiento: <?php echo $_POST['dob']; ?>
            </p>
            <p class="card-text">
                Correo electronico: <?php echo $_POST['email']; ?>
            </p>
            <p class="card-text">
                Telefono: <?php echo $_POST['telefono']; ?>
            </p>
        </div>
    </div>


<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>