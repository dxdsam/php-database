<?php 

	require_once '../Koneksi/koneksi.php';
	$username = 'admin';
	$password = 'admin123';
	$connection = getPDOConnection();
	
	$query = 'SELECT * FROM user WHERE username = :username AND password = :password';
	$result = $connection->prepare($query);
	$result->bindParam("username", $username);
	$result->bindParam("password", $password);
	$result->execute();

	foreach ($result as $row) {
		var_dump($row).PHP_EOL;
	}