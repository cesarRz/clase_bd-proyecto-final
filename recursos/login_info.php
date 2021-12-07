<?php
	
	include "conexion.php";


	$registro = array(
  "c_renta" => $_GET['c_renta'],
  "c_regreso" => $_GET['c_regreso'],
  "f_renta" => $_GET['f_renta'],
  "f_regreso" => $_GET['f_regreso'],
  "h_renta" => $_GET['h_renta'],
  "h_regreso" => $_GET['h_regreso']
  // "f_nacimiento" => $_POST['f_nacimiento'],
  // "p_residencia" => ucwords($_POST['p_residencia'])
);


	$profile = array(
	"user" => $_POST['uname'],
	"password" => $_POST['psw']
	);

	$sql = "SELECT * FROM usuario WHERE c_username ='" . $profile['user'] . "' AND  n_password = '" . $profile['password'] . "';" ;


	$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id_client"]. " - Name: " . $row["n_client"]. " " . $row["app_client"]. "<br>";

    $id_client = $row["id_client"];

    header("Location: ../index.php?page=profile&registro=$id_client");
  }
} else {
  echo "0 results";
}
  		
?>
