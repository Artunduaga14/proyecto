<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
		$naci = trim($_POST['nacimiento']);
	    $consulta = "INSERT INTO datos(nombre, email, fecha_nacimiento, fecha_reg) VALUES ('$name','$email','$naci','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	echo"<script language='JavaScript'>
			alert('¡Te has inscripto correctamente!')
			location.assign('../index.html')
			</script>";
	    } else {
	    	echo"<script language='JavaScript'>
			alert('¡Ups ha ocurrido un error!')
			location.assign('formulario.php')
			</script>";
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>