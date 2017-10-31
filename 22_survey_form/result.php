<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Results Page to Survey Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style>
      .div2 {
        width: 100%;
        height: 100%;
        padding: 50px;
        border: 1px solid black;
      }
    </style>

  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="...">
          </a>
        </div>
      </div>
    </nav>
    <hr>
    <!-- END NAVBAR -->

    <br>

    <!-- RESULTS FORM -->
    <div class="container div2">
      <header>
        <h4 style="text-decoration: underline;">Submitted Information</h4>
      </header>
      <div class="container">
        <div class="row">
          <!-- <label for="">Name:</label> -->
          <p class="col-md-2">Name: </p>
          <p class="col-md-10"><?php echo $_POST['name'] ?></p>
          <p class="col-md-2">Dojo Location: </p>
          <p class="col-md-10"><?php echo $_POST['location'] ?></p>
          <p class="col-md-2">Favorite Language: </p>
          <p class="col-md-10"><?php echo $_POST['language'] ?></p>
          <p class="col-md-2">Comment</p>
          <p class="col-md-10"><?php echo $_POST['comment']; ?></p>
          <br>
          <!-- COULD HAVE DONE IT THIS WAY TOO -->
          <!-- <label class="col-md-2" for="">Comment:</label> -->
          <!-- <p class="col-md-10"><?php echo $_POST['comment']; ?></p> -->

        </div>
      </div>
    </div>
    <!-- END RESULTS FORM -->

  </body>
</html>
