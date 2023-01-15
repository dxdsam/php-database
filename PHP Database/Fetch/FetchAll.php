<?php 

	require_once '../Koneksi/koneksi.php';
	$connection = getPDOConnection();
	$query = 'SELECT * FROM customer';
	$result = $connection->prepare($query);
	$result->execute();
	$row = $result->fetchAll();
	var_dump($row);
