<?php

  $number = 0;

 if ($number == 0) {
     echo "The number is zero";
 } elseif ($number > 0) {
     echo "The number is positive";
 } elseif ($number < 0) {
     echo "The number is negative";
 } else {
     echo "The number is not a valid integer";
 }

 echo "<br>";

 $driverAge = 100;

if ($driverAge >= 25 && $driverAge <= 65) {
    echo "You are eligible to drive.";
} else {
    echo "You are not eligible to drive.";
}

?>