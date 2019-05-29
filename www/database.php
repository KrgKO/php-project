<?php

$dbhost = "phpdb";
$dbuser = "root";
$dbpass = "root";
$dbname = "demo";
$dbport = "3306";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

// Check connection
if (!$conn) {
    die("Connection database failed: " . mysqli_connect_error());
}
echo "Connected database successfully";
