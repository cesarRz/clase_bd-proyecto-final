<?php

	$fecha = date("Y-m-d");


	$f_nacimiento = $_GET['f_nacimiento'];
	$p_residencia = $_GET['p_residencia'];

	$date1 = new DateTime("$f_nacimiento");
	$date2 = new DateTime("$fecha");
	$diff = $date1->diff($date2);
	// will output 2 days
	$edad = $diff->y ;




		// echo "<center class='mensaje_centro'> Fecha de nacimiento: $f_nacimiento "  ;
		// echo "<br>";
		// echo "Pais de Residencia: $p_residencia" ;
		// echo "<br></center> ";

?>

<div class="mensaje_centro_registro">
<div class="login" id="registro">
	<form action="recursos/existe.php" method="POST">
		<label for="n_client">Nombre</label>
		<input type="text" name="n_client" required>

		<label for="app_client">Apellido Paterno</label>
		<input type="text" name="app_client" required>

		<label for="apm_client">Apellido Materno</label>
		<input type="text" name="apm_client" required>

		<label for="f_nacimiento">Fecha de Nacimiento</label>
		<input type="date" name="f_nacimiento" value=<?php echo "'$f_nacimiento'"; ?> required>
		<br>
		<label for="c_mail">E-mail</label>
		<input type="email" name="c_mail" required>

		<label for="c_username">Usuario</label>
		<input type="text" name="c_username" required>

		<label for="n_password">Contrasena</label>
		<input type="Password" name="n_password" required>
		<br>
		<label for="n_pais">Pais</label><br>
		<input type="text" name="n_pais" value=<?php echo "'$p_residencia'"; ?> required>

		<input type="submit" name="Registrar" value="Submit">
		<p style="color:rgb(255, 183, 241);"><?php echo $_GET['mensaje'];?></p>


	</form>

</div>
</div>