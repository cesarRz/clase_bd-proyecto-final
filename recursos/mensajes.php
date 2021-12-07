

<center class='mensaje_centro'>

	<?php

	include 'recursos/conexion.php';



	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$mail= $_POST['email'];
	$asunto= $_POST['asunto'];
	$mensaje= $_POST['mensaje'];


	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO comments (c_nom, c_ap, c_mail, c_asunto, c_mensaje) 
			VALUES('$nombre', '$apellido', '$mail', '$asunto', '$mensaje');";


	if ($conn->query($sql) === TRUE) {
  echo "Thank you $nombre, We have recieved your meessage.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
	
<form action="index.php?page=home">
    <input type="submit" value="Back" />
</form>


</center>
