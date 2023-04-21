<?php
include'controller\conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php
include'controller\head.php';
?>
<body>
    
<?php
include'view\formulario.php';
?>
<div class="col-md-6">
                <div class="row">
                <?php include 'servicios.php';?>
                </div> 
            </div>
</body>

<?php
include'controller\scripts.php';
?>
</html>