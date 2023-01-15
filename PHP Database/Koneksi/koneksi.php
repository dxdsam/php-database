<?php 
	

	function getPDOConnection()
	{

		$host = "localhost";
		$port = 3306;
		$database = "barang";
		$username = "root";
		$password = "";
		return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
	}