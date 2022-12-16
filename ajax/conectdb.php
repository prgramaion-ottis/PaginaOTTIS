<?php
	//$servername = "mysql.hostinger.es";
	$servername = "fsdcomunicaciones.com";
	$database = "fsdcomun_bd_PQR";
	$username = "fsdcomun_userpqr";
	$password = "bd_PQR123";



	/*$servername = "127.0.0.1";
	$database = "bd_pqr";
	$username = "root";
	//$password = "p12d03cs";
	$password = "";*/

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
		die("La Conexion fallo: " . mysqli_connect_error());
	}
	
?>