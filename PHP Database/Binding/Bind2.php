<?php 

	require_once '../Koneksi/koneksi.php';
	$connection = getPDOConnection();
	$username = 'admin';
	$password = 'admin123';

	$query = 'SELECT * FROM user WHERE username = ? AND password = ?';
	$result = $connection->prepare($query);
	$result->bindParam(1,$username);
	$result->bindParam(2,$password);
	