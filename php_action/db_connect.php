<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "inventory";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if($connect->connect_error) {
	die("Connection Failed : " . $connect->connect_error);
} else {
}

?>