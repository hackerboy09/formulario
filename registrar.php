<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
		$escuela = trim($_POST['escuela']);
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg, escuela) VALUES ('$name','$email','$fechareg','$escuela')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has postulado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>