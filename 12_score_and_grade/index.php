<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Score and Grade</title>
  </head>
  <body>
    <h3>This is a random grade generator</h3>
    <?php

    // function random_grade(){
    //   $num = rand(50,100);
    //   if($num < 70) {
    //     echo "<h1>Your Score: $num/100</h1>";
    //     echo "<h2>Your Grade is D</h2>";
    //   }
    //   elseif ($num > 69 && $num < 80) {
    //     echo "<h1>Your Score: $num/100</h1>";
    //     echo "<h2>Your Grade is C</h2>";
    //   }
    //   elseif ($num > 79 && $num < 90) {
    //     echo "<h1>Your Score: $num/100</h1>";
    //     echo "<h2>Your Grade is B</h2>";
    //   }
    //   else {
    //     echo "<h1>Your Score: $num/100</h1>";
    //     echo "<h2>Your Grade is A</h2>";
    //   }
    // }

    random_grade();

    function random_grade(){
      for ($i=0; $i < 101; $i++) {
        $num = rand(50,100);
        if($num < 70) {
          echo $i . "<h1>Your Score: $num/100</h1>";
          echo "<h2>Your Grade is D</h2>";
        }
        elseif ($num > 69 && $num < 80) {
          echo $i . "<h1>Your Score: $num/100</h1>";
          echo "<h2>Your Grade is C</h2>";
        }
        elseif ($num > 79 && $num < 90) {
          echo $i . "<h1>Your Score: $num/100</h1>";
          echo "<h2>Your Grade is B</h2>";
        }
        else {
          echo $i . "<h1>Your Score: $num/100</h1>";
          echo "<h2>Your Grade is A</h2>";
        }
      }
    }

    echo random_grade();

    ?>

  </body>
</html>
