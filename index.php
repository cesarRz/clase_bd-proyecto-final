<?php
	if ($_GET['page'] == 'contact') {
		$title = "Contactanos";
		 	
	}elseif ($_GET['page'] == 'sesion') {
		$title = "Iniciar Sesion";
	}
	elseif ($_GET['page'] == 'mensaje') {
		$title = "Mensaje Enviado";

	}elseif ($_GET['page'] == 'usuario_registro') {
		$title = "Registro";
	}
	elseif ($_GET['page'] == 'profile') {
		$title = "Welcome";
	}
	else{
		$title = "Inicio";	
	}
	

	include 'vistas/header.php';


	if ($_GET['page'] == 'contact') {

		include 'vistas/contact.php';
		 	

	}elseif ($_GET['page'] == 'sesion') {

		include 'vistas/login.php';
		
	}
	elseif ($_GET['page'] == 'mensaje') {

		include 'recursos/mensajes.php';
		
	}elseif ($_GET['page'] == 'registro') {

		include 'vistas/usuario_registro.php';
		
	}elseif ($_GET['page'] == 'profile') {

		include 'vistas/profile.php';

	}elseif ($_GET['page'] == 'choose') {

		include 'vistas/roster.php';

	}else{

		include 'vistas/inicio.php';
		
	}

	

	  include 'vistas/footer.php';
?>

</body>
</html>