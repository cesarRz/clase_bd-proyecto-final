
<center class='mensaje_centro'>

	<?php

	session_start();

	include '../recursos/conexion.php';

	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}

	$pf = "SELECT id_trans FROM transaction;";

	$result_pf = $conn->query($pf);
	$id_trans = "t".sprintf("%03d", $result_pf->num_rows + 1);

	$id_of = "SELECT id_oficina FROM oficinas WHERE of_name = '". $_SESSION['c_renta']."';";

	$result_of = $conn->query($id_of);
	$result_of = mysqli_fetch_assoc($result_of);
	

	$sql = "INSERT INTO transaction (id_trans, id_oficina, id_build, rent_date, back_date, id_client,done_deal)VALUES('$id_trans','".$result_of['id_oficina']."','".$_SESSION['seleccion']."','" . $_SESSION['f_renta'] ."','". $_SESSION['f_regreso'] ."','".$_SESSION['id_client']."','TRUE');";


	if ($conn->query($sql) === TRUE) {
  echo "Gracias, tu reservacion esta hecha.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

session_destroy();

?>
	
<form action="../index.php?page=profile">
    <input type="submit" value="Back" />
</form>


</center>
