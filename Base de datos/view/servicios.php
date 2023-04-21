<?php include 'conexion.php';

$sql=mysqli_query($con, "SELECT nombres,apellidos,empresa,sexo,telefono,email,direccion FROM servicios");


    while($datos=mysqli_fetch_assoc($sql)){
        echo '<div class="card" style="width: 40%">
          <div class="card-body">
          <h5 class="card-title"> '.$datos['nombres'].' '.$datos['apellidos'].'</h5>
          <a href="#" class="btn btn-primary"> INGRESAR </a>
        </div>
      </div>';
    }
?>
