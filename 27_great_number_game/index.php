<?php session_start();

if (!isset($_SESSION['rand_number'])) {  // Checking if the SESSION['rand_number'] is in SESSION, if it isn't then...
  $_SESSION['rand_number'] = rand(1,100);  // Set the SESSION['rand_number'] to the SESSON
  $_SESSION['count'] = 0;
};

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">Great Number Game in PHP!</h1>
      </div>
      <h3 class="text-center">I'm thinking of a number between 1 and 100</h3>
      <h3 class="text-center">Take a guess!</h3><br>

      <div class="row text-center">
          <form class="" action="process.php" method="post">
            <input type="hidden" name="action" >
            <input type="text" name="guess_number" placeholder="Enter a number"><br><br>
            <input class="btn btn-primary" type="submit" value="submit">
          </form>
        </div>
      </div>
    </div>

    <br>

    <h4 class="text-center">Number of TRYs <?php echo $_SESSION['count']; ?></h4>

  </body>
</html>
