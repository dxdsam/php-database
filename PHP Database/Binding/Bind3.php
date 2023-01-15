<?php 

	require '../Koneksi/koneksi.php';
	$connection = getPDOConnection();
	$username = 'admin';
	$password = 'admin123';
	$query = 'SELECT * FROM user WHERE username = ? AND password = ?';
	$result = $connection->prepare($query);
	$result->execute([$username, $password]);
	
	foreach ($result as $row) {
		var_dump($row).PHP_EOL;
	}