<!-- <?php
     include("database.php");
     echo "<br>";
     echo "<br>";
     echo "<br>";

     //retrieve data from table
     $sql = "SELECT * FROM employee";
     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
       echo $row["id"] . " ";
       echo $row["name"];
       echo "<br>";
      }
     } else {
      echo "no user found";
     }


     echo "<br>";
     echo "<br>";
     echo "<br>";
     ?> -->

<!-- CREATE DB -->
<!-- <?php
     include("createDb.php");
     echo "<br>";
     echo "<br>";
     echo "<br>";
     ?> -->

<!-- CREATE TABLE -->
<!-- <?php
     include("createTable.php");

     echo "<br>";
     echo "<br>";
     echo "<br>";
     ?> -->

<?php
include("insertData.php");

echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
echo "hello world"
?>