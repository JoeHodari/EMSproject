<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "hodari@2020";
$dBName = "370project";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>