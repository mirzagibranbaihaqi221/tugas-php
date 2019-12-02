<?php

	$server 		="localhost";
	$user   		="root";
	$password 	="1234";
	$db					="PHPsql";
	
	
	$connect				=new mysqli($server,$user,$password,$db);
	
	if (!$connect) {
		die("koneksi gagal : ".mysqli_connect_error());
	
	
	}


?>
