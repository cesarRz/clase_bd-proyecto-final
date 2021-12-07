<style type="text/css">
	
#check_out{

	background-color: rgb(200,200,200);

	margin-left: 15%;
	width: 50%;
	height: 400px;
	padding: 25px;
	display: inline-block;

	border-radius: 25px;

}

#check_out h2 {

	color:rgb(233, 106, 52);
	width: 50%;
	display: inline-block;

}

#check_out td{

color: white;
}

#logo_checkout{

	float:right;
	display: inline-block;
	height: 50px;
	color:orange;

}

#check_left{

	display: inline-block;
	height: 30%; 
	margin-left:20px;
	width: 50%;
}
#check_right{
width: 30%;
float: right;

padding-right: 30px;

}

#check_right table{

width: 70%;

}


</style>



<div id="check_out">

	<h2>Check Out</h2>

	<?php

	session_start();

	$_SESSION['b_name'] = $fetch_car['b_name'];


	$sub = $fetch_car['b_price'];
	$Tax = $sub * 0.07;
	$total = $sub + $Tax;

?>

	<img src="images/check_out_logo.png" id="logo_checkout">

	<div id="check_left">
		<table>
			<tr>
				<td> Carro: </td>
				<td><?php echo ucfirst($fetch_car['b_name']); ?></td>
			</tr>
			<tr>
				<td>Fecha de renta: </td>
				<td><?php echo $_SESSION['f_renta']. " " .$_SESSION['h_renta']; ?></ </td>
			</tr>
			<tr>
				<td>Fecha de regreso: </td>
				<td> <?php echo $_SESSION['f_regreso']. " " .$_SESSION['h_regreso'];?></td>
			</tr>
			<tr>
				<td>Lugar de renta: </td>
				<td> <?php echo $_SESSION['c_renta']; ?></td>
			</tr>
			<tr>
				<td>Lugar de regreso: </td>
				<td><?php echo $_SESSION['c_regreso']; ?> </td>
			</tr>
		</table>

		<br>
		<br>
		<br>
		<br>
		<br>
		<form action="vistas/final.php" method="POST">
			
			<button type="submit">Completar</button>

		</form>
	</div>
	<div id="check_right">
		<table>
			<tr>
				<td>Price: </td>
				<td>$<?php echo $fetch_car['b_price']; ?></td>
			</tr>
			<tr>
				<td><b>Sub Total:</b> </td>
				<td><b>$ <?php echo "$sub"; ?></b></td>
			</tr>
			<tr>
				<td>Tax (7%): </td>
				<td>$ <?php echo "$Tax"; ?></td>
			</tr>
			<tr>
				<td><b>Total:</b> </td>
				<td><b>$ <?php echo "$total"; ?></b></td>
			</tr>
		</table>
			
			
		<br>
		<br>
		<img src="images/<?php
		session_start();
		 echo $_SESSION['seleccion']; ?>.png" height="100px">
	</div>
</div>