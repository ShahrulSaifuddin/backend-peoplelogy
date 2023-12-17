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
   <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="loginOption" id="usernameOption" value="username" checked>
    <label class="form-check-label" for="usernameOption">Username</label>
   </div>
   <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="loginOption" id="phoneOption" value="phone">
    <label class="form-check-label" for="phoneOption">Phone Number</label>
   </div>

   <div class="form-floating mb-3 mt-3">
    <input type="text" class="form-control" id="loginField" placeholder="Enter User Name or Phone Number" name="loginField">
    <label for="loginField">User Name or Phone Number</label>
   </div>

   <div class="form-floating mt-3 mb-3">
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    <label for="pwd">Password</label>
   </div>

   <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
  </form>
 </div>

 <!-- PHP -->
 <?php
 session_start();
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $loginOption = $_POST["loginOption"];
  $loginField = $_POST["loginField"];
  $password = $_POST["pswd"];

  // Validate login
  $validLogin = false;
  if ($loginOption === "username" && $loginField === "sahmadrx" && $password === "123") {
   $validLogin = true;
  } elseif ($loginOption === "phone" && $loginField === "0123456789" && $password === "123") {
   $validLogin = true;
  }

  if ($validLogin) {
   $_SESSION["username"] = $loginField;
   echo '<script>alert("Login successful");</script>';
  } else {
   echo '<script>alert("Invalid login");</script>';
  }
 }
 ?>
</body>

</html>