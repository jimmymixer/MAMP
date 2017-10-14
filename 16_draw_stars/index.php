<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Draw Stars</title>
  </head>
  <body>

    <?php

      echo "<br><hr><br>";
      
      // check whether value is a number
      // if number, print "*" as many times of the value of the index
      $x = array(4, 6, 1, 3, 5, 7, 25, "test");
      foreach ($x as $key => $value) {
        if(is_numeric($value)){
          echo "This is a Numberic Number! ";
          echo str_repeat("*", $value) . "<br>";
        }
        else {
          echo "This is NOT A NUMBER! " . "<br>";
        }
      }

      echo "<br><hr><br>";

      // check whether value is a number
      // if number, print "*" as many times of the value of the index
      $x = array(4, 6, 1, 3, 5, 7, 25, "test");
      foreach ($x as $value) {
        if(is_numeric($value)){
          echo "This is a Numberic Number! ";
          echo str_repeat("*", $value) . "<br>";
        }
        else {
          echo "This is NOT A NUMBER! " . "<br>";
        }
      }

      echo "<br><hr><br>";

      // check whether value is a number
      // if number, print "*" as many times of the value of the index
      // if it is a string, print the first letter of the count of the string
      $y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
      foreach ($y as $key => $value) {
        if (is_numeric($value)) {
          echo str_repeat("*", $value) . "<br>";
        }
        else {
          echo str_repeat($value[0], strlen($value)) . "<br>";
        }
      }

    ?>

  </body>
</html>
