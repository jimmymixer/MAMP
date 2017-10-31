<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
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

    <!-- SIMPLE FORM -->
    <div class="container div2">
      <form class="form-group" action="result.php" method="post">

        <div class="row">
          <label for="form_name">Your name:</label>
          <input id="form_name" type="text" class="" name="name" value="">
        </div>
        <br>
        <div class="row">
          <label for="form_dojo_location">Dojo location:</label>
          <select id="form_dojo_location" class="" name="location">
            <option value="DC">Washington, DC</option>
            <option value="WA">Seatle, WA</option>
            <option value="NY">New York, NY</option>
          </select>
        </div>
        <br>
        <div class="row">
          <label for="form_favorite_language">Favorite Language:</label>
          <select id="form_favorite_language" class="" name="language">
            <option value="python">Python</option>
            <option value="ruby">Ruby</option>
            <option value="javascript">JavaScript</option>
            <option value="php">PHP</option>
          </select>
        </div>
        <br>
        <div class="row">
          <label for="form_comment">Comment (Optional):</label>
          <br>
          ​<textarea id="form_comment" rows="10" cols="70" class="" name="comment"></textarea>
        </div>
        <br>
        <input class="btn btn-primary" type="submit" name="" value="SUBMIT">

      </form>
    </div>
    <!-- END SIMPLE FORM -->

  </body>
</html>
