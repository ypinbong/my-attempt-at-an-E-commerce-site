<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName =   "naLouGehDB";

// $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("Unable to connect");

$conn = mysqli_connect("$dbServername","$dbUsername","$dbPassword","$dbName");
    
if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }

?>