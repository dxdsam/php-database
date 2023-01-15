<?php 

	require_once '../Koneksi/koneksi.php';

	$connection = getPDOConnection();
	$username = 'admin';
	$password = 'admin123';

	$query = 'SELECT * FROM user WHERE username = :username AND password = :password';
	$result = $connection->prepare($query);
	$result->bindParam("username", $username);
	$result->bindParam("password", $password);
