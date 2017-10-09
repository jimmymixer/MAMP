<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coin Throw</title>
    <style media="screen">
      h3 {
        color: blue;
      }
    </style>
  </head>
  <body>

    <h3>This is a program that simulates throwing a coin X amount of times</h3>

    <?php

      $heads = 0;
      $tails = 0;

      for ($i=0; $i < 20; $i++) {
        $toss = rand(0,1);
        if ($toss === 0) {
          $heads = $heads + 1;
          echo "Attempt #" . $i . "Throwing coin... It's heads! " . "Got " . $heads . " head(s) so far and " . $tails . " tail(s) so far" . "<br>";
        }
        else {
          $tails = $tails + 1;
          echo "Attempt #" . $i . "Throwing coin... It's tails! " . "Got " . $heads . " head(s) so far and " . $tails . " tail(s) so far" . "<br>";
        }
      }

    ?>

  </body>
</html>
