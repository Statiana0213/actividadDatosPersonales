<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "datospersonales";

	// Create connection
	$conexion = new mysqli($pNombre, $sNombre, $pApellido, $sApellido, $edad, $ciudad, $database);
	if($conexion->connect_error) {
	die("Connection failed: " . $conn->connect_error);
    }
    
?>
