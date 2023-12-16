<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <title>Final Task</title>
</head>

<body>
 <div class="container my-5">
  <?php
  /* TASK 1 */
  echo "<h1>Task 1</h1>";
  $name = "shahrul";
  $age = "11";
  $city = "Penang.";
  echo "<h3>My name is $name, I am $age years old, and I live in $city</h3>";

  echo "<br>";
  echo "<br>";
  echo "<br>";

  /* TASK 2 */
  echo "<h1>Task 2</h1>";
  $grade = 10;

  if ($grade >= 90) {
   echo "<h3>Excellent!</h3>";
  } elseif ($grade >= 80) {
   echo "<h3>Good job!</h3>";
  } elseif ($grade >= 70) {
   echo "<h3>Keep it up!</h3>";
  } else {
   echo "<h3>Needs improvement</h3>";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  /* TASK 3 */
  echo "<h1>Task 3</h1>";
  for ($i = 1; $i < 11; $i++) {
   echo "<h6>$i</h6><br>";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  $fruits = array("Banana", "Apple", "Orange");
  foreach ($fruits as $fruit) {
   echo "<h6>$fruit</h6><br>";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  /* TASK 4 */
  echo "<h1>Task 4</h1>";
  $names = $ages = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $names = test_input($_POST["names"]);
   $ages = test_input($_POST["ages"]);
  }

  function test_input($data)
  {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  ?>

  <!-- HTML FORM -->
  <form class="mb-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
   <div class="form-floating mb-3 mt-3">
    <input type="text" class="form-control" id="names" placeholder="Enter name" name="names">
    <label for="names">Name</label>
   </div>

   <div class="form-floating mt-3 mb-3">
    <input type="number" class="form-control" id="ages" placeholder="Enter age" name="ages" min=1>
    <label for="ages">Age</label>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php
  echo "<h2>Your Input:</h2>";
  if ($names && $ages) {
   echo "<h4>My name is $names and I am $ages years old</h4>";
  }
  echo "<br>";
  echo "<br>";
  echo "<br>";
  ?>


  <?php
  /* TASK 5 */
  echo "<h1>Task 5</h1>";
  function calculateSum($num1, $num2)
  {
   $total = $num1 + $num2;
   echo "<h6>$num1 + $num2 = $total</h6>";
  }

  calculateSum(1, 1);
  calculateSum(1, 2);
  calculateSum(1, 10);

  ?>
 </div>

</body>

</html>