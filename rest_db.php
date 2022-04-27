<?php

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "productdb";

$conn = mysqli_connect($Servername,$Username,$Password,$dbname);

if (!$conn) {
	die("connection failed : " . mysqli_connect_error());
}




?>