# backend-peoplelogy

if(isset($\_POST['login'])) {
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); //age

//validate
if(empty($age)) {
echo "That number wasn't valid";
} else {
echo "you are $age years old";
}
}

import
include("header.html")

cookie

<?php
// set cookie
setcookie("food", "pizza", time() + (86400 * 2), "/"); // expired in 2 days and default path "/""
setcookie("drink", "coffee", time() + (86400 * 2), "/");

//delete cookie
setcookie("food", "pizza", time() - 0, "/"); 

foreach($_COOKIE as $key => $value) {
 echo "$key = $value <br>";
}

if(isset($_COOKIE["food"])){
 echo $_COOKIE["food"];
}
?>

connect sql

1. MySQLi Extension
2. PDO (PHP Data Objects)

3. insert data into table
   index.php

<?php
include("database.php")

$username = 'abd';
$password = 'qwe';
$hash = password_hash($password, PASSWORD_DEFAULT)

$sql = "INSERT INTO <table_name> (col, col)
        VALUES ("$username", "$hash")";

try {
 mysqli_query($conn, $sql);
 echo "user in now registered"
} catch(mysqli_sql_exception) {
 echo "Could not register user"
}

//retrieve data from table
$sql = "SELECT * FROM <table_name>"
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)){
 echo $row["id"];
 echo $row["user"];
 }
} else {
 echo "no user found"
}

// close connection
mysqli_close($conn)
?>

html.....

database.php

<?php
$db_server = "localhost";
$db_user = 'root';
$db_pass = "";
$db_name = "dbName";
$conn = "";

try {
 $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name); //object
} catch(mysqli_sql_exception) {
 echo "Could not connect";
}

//check connection
if($conn) {
 echo "You are connected";
}
?>

SERVER
foreach($_SERVER as $key => $value) {
 echo "$key = $value <br>";
}

if($\_SERVER["REQUEST_METHOD"] == "POST") {
echo "hello";
}
