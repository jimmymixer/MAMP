<?php
session_start();
// var_dump($_SESSION);
// var_dump($_SESSION['counter']);
if(!isset($_SESSION['counter'])) {
  $_SESSION['counter'] = 1;
} else {
  $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Counter</title>
    <!-- Bootstrap -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style type="text/css">
      h1, h2{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1>Demo Counter</h1>
    </div>

    <h1>You came to this site</h1>
    <h2> <?php echo $_SESSION['counter']; ?> time(s) </h2>



    <!-- Bootstrap js -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  </body>
</html>
