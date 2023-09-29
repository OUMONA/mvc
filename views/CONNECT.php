<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "ldscampus";
	/*Je connecte tout ça à la base*/
	$conn = mysqli_connect($server,$username,$password,$database);
	if(!$conn){//Failed
		die("<script>alert('The conection failed')</script>");	
	}	
?>