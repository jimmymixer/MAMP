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
      .pull-right {
        float: right !important; // Use of important emulates bootstrap
      }
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
    <!-- Form -->
    <div class="container">
     <form class="form-group" action="checkout.php" method="post">
        <div class="container">
          <label class="col-md-2" for="form_name">Your Name:</label>
          <input class="col-md-4" id="form_name" type="text" name="name" value="" required>
        </div>
        <div class="container">
          <label class="col-md-2" for="form_email">Email:</label>
          <input class="col-md-4" id="from_email" type="text" name="email" value="" required>
        </div>
        <div class="container">
          <label class="col-md-2" id="form_purchasing" for="">Purchasing:</label>
          <select class="col-md-4" id="form_item" name="item">
            <option value="Coding Dojo T-Shirt">Coding Dojo T-Shirt</option>
            <option value="Coding Dojo Coffee Cup">Coding Dojo Coffee Cup</option>
            <option value="Coding Dojo T-Pen">Coding Dojo T-Pen</option>
          </select>
        </div>
        <div class="container">
          <label class="col-md-2" for="form_quantity">Quantity:</label>
          <input class="col-md-4" id="form_quantity" type="text" name="quantity" value="" required>
        </div>
        <div class="container">
          <input class="btn btn-primary col-md-2 pull-right" type="submit" name="" value="Submit">
        </div>
      </form>
    </div>

  </body>
</html>
