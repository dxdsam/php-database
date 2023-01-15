<?php 

	require_once '../Koneksi/koneksi.php';

	$connection = getPDOConnection();

	$sql = 'INSERT INTO customer2(nama, email) VALUES ("Ridho","ridhosatudua@gmail.com")';
	$connection->exec($sql);
	$connection = null;