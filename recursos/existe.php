<?php

	$info= array(
		"nombre" => $_POST['n_client'],
		"a_paterno" => $_POST['app_client'],
		"a_materno" => $_POST['apm_client'],
		"f_nacimiento" => $_POST['f_nacimiento'],
		"mail" => $_POST['c_mail'],
		"user" => $_POST['c_username'],
		"pass" => $_POST['n_password'],
		"pais" => $_POST['n_pais']
		);

	include 'conexion.php';

	$sql = "SELECT * from usuario WHERE c_username = '". $info['user'] ."' OR c_mail = '". $info['mail'] ."' ;";

	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    		header("Location: ../index.php?page=registro&mensaje=*Username o correo en uso ");
    
  }
} else {

	$num_search = "SELECT * from usuario;";
	$result_num = $conn->query($num_search);
	$result_num = sprintf("%03d", $result_num->num_rows + 1) ;
	$id_creado = "c".$result_num;

	$insert = "INSERT INTO usuario VALUES
	('$id_creado', '".
	 $info['nombre']."','".
	 $info['a_paterno']."','".
	 $info['a_materno']."','".
	 $info['f_nacimiento']."','".
	 $info['mail']."','".
	 $info['user']."','".
	 $info['pass']."','".
	 $info['pais'].
	"')";

	echo "$insert";

	if ($conn->query($insert) === TRUE) {
  		
		header("Location: ../index.php?page=profile&registro=$id_creado");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}



$conn->close();