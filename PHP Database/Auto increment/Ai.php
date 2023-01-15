<?php 
	
	require_once '../Koneksi/koneksi.php';
	$connection = getPDOConnection();
	$query = 'INSERT INTO customer(email,first_name,last_name) VALUES("irwan@gmail.com","irwan","setiawan")';
	$connection->exec($query);
	$lastId = $connection->lastInsertId();

	var_dump($lastId);