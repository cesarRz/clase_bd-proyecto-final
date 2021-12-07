<?php

	session_start();

  $_SESSION["c_renta"] = $_POST['c_renta'];
  $_SESSION['c_regreso'] = $_POST['c_regreso'];
  $_SESSION['f_renta'] = $_POST['f_renta'];
  $_SESSION['f_regreso'] = $_POST['f_regreso'];
  $_SESSION['h_renta'] = $_POST['h_renta'];
  $_SESSION['h_regreso'] = $_POST['h_regreso'];
	


	header("Location: ../index.php?page=choose");
?>