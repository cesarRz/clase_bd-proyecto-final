<div style="padding-top: 150px;">
	
	<h1 id="coleccion" style="margin-top: 0; color: white;">Escoge Tu Estilo</h1>

</div>

<?php

include 'recursos/conexion.php';

if(!$conn){
		echo "No se pudo conectar a la base ";
	}

	$sql = "SELECT * FROM build; ";

	$result=$conn->query($sql);

	$num_rows=mysqli_num_rows($result);

	 if ($result->num_rows > 0) {
  // output data of each row
  		while($row = $result->fetch_assoc()) {

    		echo 



    			"<div class='char'>".

    			"<img class='img_roster' src='images/" . $row['id_build'] . ".png' alt=' " . $row['id_build'] . "'>".
    			"<br>".
    				"<div class='text_char'>".
    				"<h1>". ucwords($row['b_name']) . "</h1>"  . "
    				<form action='recursos/roster_select.php' method='POST'>
    				<input Type='hidden' value='".$row['id_build']."' name='seleccion'>
    				<button type='submit'>Apartar</button>
    				</form>".
	    			"<p><b>ID: </b>".ucwords($row['id_build']) . "</p>" . 
		    		"<p><b>Estilo: </b>". ucwords($row['b_comparison']) ." o similar</p>" .
		    		"<p><b>Precio: </b>$". ucwords($row['b_price']) . " US</p>";


		    		echo"<ul class='listado_char' >
						<li><img src='images/icons/doors.png'>  ". ucwords($row['b_doors'])." Puertas</li>
						<li><img src='images/icons/seats.png'>  ". ucwords($row['b_seats'])." Asientos </li>
						<li><img src='images/icons/transmision.png'>  " .ucwords($row['b_transmition'])." </li>";

						if ($row['b_AC'] == 'TRUE') {
						 echo "<li><img src='images/icons/AC.png'> A/C </li>";
						}
						echo "
						<li><img src='images/icons/trunk.png'>  ". ucwords($row['b_trunk'])." maletas pequenas </li>
						<li><img src='images/icons/tank.png'>  ".ucwords($row['b_tank']) ." mpg</li>	
						</ul>
					</div>



				</div>
				";
    	}
    }

?>