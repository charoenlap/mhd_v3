<?php
	$servername = "localhost";
		$username = "root";
		$password = ""; 
		$database = "use eqamumtc_EQAS2022";
		
// Create connection
		$link = mysqli_connect($servername, $username, $password);
		mysqli_set_charset($link, 'utf8');
		$sql = $database;
		$result = mysqli_query($link, $sql);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>