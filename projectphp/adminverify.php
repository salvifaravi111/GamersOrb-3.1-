<?php

$name=$_POST["username"];
$pass=$_POST["password"];
$servername = "localhost";
$dbname = "sddb";

$conn = new mysqli($servername, $name, $pass,$dbname);
	// Check connection
	if ($conn->connect_error) {

		echo "Wrong info,try again";
		die("Connection failed: " . mysqli_connect_error());
	}

	header( "Location: http://localhost/phpmyadmin/#PMAURL-1:db_structure.php?db=sddb&table=&server=1&target=&token=ae3f55d0835d2c1fd3f48efa5cf3be2d" );


?>