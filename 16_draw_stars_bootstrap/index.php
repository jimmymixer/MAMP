<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Draw Stars</title>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <?php

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

        echo "<hr><br><br>";

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

        echo "<hr><br><br>";

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

        echo "<hr><br><br>";

        // write a function that does the same
        function stars($array){
          foreach ($array as $key => $value) {
            if (is_numeric($value)) {
              echo str_repeat("*", $value) . "<br>";
            }
            else {
              echo str_repeat($value[0], strlen($value)) . "<br>";
            }
          }
        }

        $new_stars = array(24, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
        stars($new_stars);

        // stars(24, "Tom", 1, "Michael", 5, 7, "Jimmy Smith"); --> does not work, error comes up about passing wrong argument for the foreach statement

      ?>

    </div>
    </div>
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-light bg-faded">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
      </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
