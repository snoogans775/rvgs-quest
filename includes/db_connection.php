<?php
define("DB_SERVER", "localhost");
define("DB_USER", "rvgsym5_admin");
define("DB_PASS", "Koj1is#1");
define("DB_NAME", "rvgsym5_quest");
	//creates a database connection
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	// tests connection for errors
	if(mysqli_connect_errno()) {
		die("Database connection failed: ".
					mysqli_connect_error() .
					" (" . mysqli_connect_errno() . ")"
		);
	}
	
?>