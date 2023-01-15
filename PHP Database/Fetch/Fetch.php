<?php 
	require_once '../Koneksi/koneksi.php';
	$connection = getPDOConnection();
	$query = 'SELECT * FROM customer';
	$result = $connection->prepare($query);
	$result->execute();

	if ($row = $result->fetch()) {
		echo "Email anda adalah : ".$row['email'].PHP_EOL;
	}