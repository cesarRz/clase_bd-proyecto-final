<?php

session_start();

$_SESSION['seleccion'] = $_POST['seleccion'];


echo "La seleccion es: ". $_SESSION['seleccion'];

header("Location: ../index.php?page=sesion");