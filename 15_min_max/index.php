<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Min Get Max</title>
    <style media="screen">
      h3 {
        color: red;
      }
    </style>
  </head>
  <body>

    <h3>Get the Min Value and the Max Value</h3>

    <?php

      $sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
      $min = $sample[0];
      $max = $sample[0];
      for ($i = 1; $i < count($sample); $i++) {
        if ($sample[$i] < $min) {
          $min = $sample[$i];
          echo "Min: " . $min . "<br>";
        }
      }
      echo "<hr>";
      for ($i = 1; $i < count($sample); $i++) {
        if ($sample[$i] > $max) {
          $max = $sample[$i];
          echo "Max: " . $max;
        }
        echo "<br>";
      }

    ?>

  </body>
</html>
