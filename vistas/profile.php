<div id='profile'>

	<?php 

		session_start();

	include 'recursos/conexion.php'; 
	$id =  $_GET['registro']; 
	$_SESSION['id_client'] =  $id;

	$sql = "SELECT * FROM (transaction NATURAL JOIN usuario) NATURAL JOIN build WHERE id_client = '$id' AND done_deal = 'TRUE';" ;
	$sql2 ="SELECT * FROM usuario WHERE id_client = '$id';";
	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);


	$fetch_result = mysqli_fetch_assoc($result2);

	echo "<h1> Welcome Back, ".ucfirst($fetch_result['n_client']) . "</h1>";



#query carro

	$id_car = $_SESSION['seleccion'];

	$sql_car = "SELECT b_name, b_price FROM build WHERE id_build= '$id_car';";
	$result_car=$conn->query($sql_car);
	$fetch_car = mysqli_fetch_assoc($result_car);

	 if ($fetch_car != "") {
  // output data of each row
	include "vistas/check_out.php";
}






	
?>
<br><br>
<h2 style="margin-left: 35%;">Todas sus rentas</h2>
<table id="transactions">
	<tr>
		<th>
			Transaction ID
		</th>
		<th>
			Rent Date
		</th>
		<th>
			Return Date
		</th>
		<th>
			Build Type
		</th>
	</tr>
	


<?php
	if ($result->num_rows > 0) {
	  
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "
	    <tr>
	    	<td>".
	    		$row["id_trans"].
	    	"</td>
	    	<td>".
	    		$row["rent_date"].
	    	"</td>
	    	<td>".
	    	$row["back_date"].
	    	"</td>
	    	<td>".
	    	$row["b_name"].
	    	"</td>

	    	</tr>";
	  }
	 
	} else {
	}
 echo "</table>";
	?>

</div>