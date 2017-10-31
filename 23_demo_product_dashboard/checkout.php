<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Product Dashboard Main Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
    </style>
  </head>
  <body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-faded">
      <a class="navbar-brand" href="#">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap
      </a>
    </nav>
    <hr><br>
    <!-- Result -->
    <div class="container">
      <p>Hi <?php echo $_POST['name'] ?>.</p>
      <p>Thanks for purchasing <?php echo $_POST['quantity'] ?> <?php echo $_POST['item'] ?> </p>
      <p>An email will be sent to <?php echo $_POST['email'] ?></p>
    </div>

  </body>
</html>
