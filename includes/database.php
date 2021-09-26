<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "platereg";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


// $conn = new PDO('mysql:dbname='.$dbName.';host='.$dbServerName.';charset=utf8', $dbUsername, $dbPassword);

// $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);