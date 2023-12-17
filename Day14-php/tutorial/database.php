<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "demo";

// Create connection

try {
 $conn = mysqli_connect($servername, $username, $password, $databasename);
} catch (mysqli_sql_exception) {
 echo "Could not connect";
}

//check connection
if ($conn) {
 echo "You are connected";
}
