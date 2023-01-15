<?php 
	
	require_once '../Koneksi/koneksi.php';
	$connection = getPDOConnection();
	$query = "SELECT * FROM customer2";
	$result = $connection->query($query);

	foreach ($result as $row) {
		print_r($row);
	}