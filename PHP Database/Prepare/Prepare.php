<?php 

	require_once '../Koneksi/koneksi.php';
	$connection = getPDOConnection();

	$username = 'admin';
	$password = 'admin123';

	$query = "SELECT * FROM user WHERE username = :username AND password = :password";
	// sebelum melakukan binding parameter, query akan di prepare terlebih dahulu
	$result = $connection->prepare($query);