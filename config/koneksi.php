<?php
	//Koneksi MySql with PhP
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbName = "arkademy";

	$conn = mysqli_connect($host, $username, $password, $dbName);
	if(!$conn)
	{
		echo '<h3>Database belum terhubung / Tydack ada koneksi Database...</h3>';
	}
