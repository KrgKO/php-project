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

$result = $conn->query("SELECT * FROM users");

echo "Return rows: ", $result->num_rows . "<br>";
while ($row = $result->fetch_array(MYSQLI_NUM)) {
    echo $row[1] . "<br>";
    echo $row[2] . "<br>";
    echo $row[3] . "<br>";
}
echo "EOF";

$result->close();
