<?php
session_start();

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 1;
} else {
  $_SESSION['count'] = $_SESSION['count'] + 1;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>High</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">Great Number Game in PHP!</h1>
      </div>
      <h3 class="text-center">I'm thinking of a number between 1 and 100</h3>
      <h3 class="text-center">Take a guess!</h3>

      <div class="row">
        <div class="center-block text-center" style="width: 250px; height: 200px; background-color: green; color: white; border: 4px solid black">
          <h1 class="col-md-12 text-center"><?php echo $_SESSION['rand_number']?> was the number!</h1>
          <form class="" action="reset.php" method="post">
            <input class="btn btn-primary" type="submit" value="Play Again!">
          </form>
        </div>
      </div>


      <br><br>

      <h4 class="text-center">Number of TRYs <?php echo $_SESSION['count']; ?></h4>

    </div>

  </body>
</html>
