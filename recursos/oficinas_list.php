<?php
	
	include 'conexion.php';

	if(!$conn){
		echo "No se pudo conectar a la base ";
	}

	$sql = "SELECT of_name FROM oficinas ";

	$result=$conn->query($sql);

	$num_rows=mysqli_num_rows($result);

	 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  	$name = ucwords($row[of_name]);

    echo "<option class='cap' value='$name'/>";
    echo "<option class='cap' value='$row[ciudad]' />";
    echo "<option class='cap' value='$row[of_zip]'/>" ;
    

  }
}


?>