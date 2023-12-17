<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <title>Login Form</title>
</head>

<body>
 <div class="container mt-3">
  <h2>Login Page</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
   <!-- first name -->
   <div class="form-floating mb-3 mt-3">
    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
    <label for="fname">First Name</label>
   </div>
   <!-- last name -->
   <div class="form-floating mt-3 mb-3">
    <input type="text" class="form-control" id="lname" placeholder="Enter password" name="lname">
    <label for="lname">Last Name</label>
   </div>
   <!-- email -->
   <div class="form-floating mt-3 mb-3">
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    <label for="email">Email</label>
   </div>
   <!-- submit button -->
   <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
  </form>
 </div>

 <!-- PHP -->
 <?php
 session_start();

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /* form context */
  $firstName = $_POST["fname"];
  $lastName = $_POST["lname"];
  $email = $_POST["email"];
  /* db context */
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

  // Check if email already exists
  $checkSql = "SELECT * FROM MyGuests WHERE email = ?";
  $checkStmt = $conn->prepare($checkSql);
  $checkStmt->bind_param("s", $email);
  $checkStmt->execute();
  $checkStmt->store_result();

  if ($checkStmt->num_rows > 0) {
   echo "<script>alert('Email already exists')</script>";
  } else {
   // Email doesn't exist, proceed with the insert
   $insertSql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)";
   $insertStmt = $conn->prepare($insertSql);
   $insertStmt->bind_param("sss", $firstName, $lastName, $email);

   if ($insertStmt->execute()) {
    echo "New records created successfully";
   } else {
    echo "Error: " . $insertStmt->error;
   }

   $insertStmt->close();
  }

  $checkStmt->close();
  $conn->close();
 }
 ?>
</body>

</html>