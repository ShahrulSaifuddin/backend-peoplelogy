<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Joe', 'Doe', 'john@example.com'),
       ('Anna', 'Tan', 'anna@example.com'),
       ('Mike', 'Jordan', 'mike@example.com'),
       ('Sham', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
 echo "New records created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
