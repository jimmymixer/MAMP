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
      $min = 0;
      $max = 0;
      for ($i=0; $i < count($sample); $i++) {
        if ($sample[$i] < $min) {
          $min = $sample[$i];
          echo "Min: " . $min;
        }
      }

    ?>

  </body>
</html>
