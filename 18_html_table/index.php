<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

      <header>Assignment: HTML Table</header>
      <?php
        $users = array(
          array('first_name' => 'Michael', 'last_name' => 'Choi'),
          array('first_name' => 'John', 'last_name' => 'Supsupin'),
          array('first_name' => 'Mark', 'last_name' => 'Guillen'),
          array('first_name' => 'KB', 'last_name' => 'Tonel')
        );
      ?>

      <table style="width:100%">
        <tr>
          <th>User #</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Full Name</th>
          <th>Full Name UPPERCASE</th>
          <th>Full Length of Name (without spaces)</th>
        </tr>
        <?php
          for ($i = 0; $i < count($users); $i++) {
            echo "<tr>";
              echo "<td>" . $i . "</td>";
              echo "<td>" . $users[$i]['first_name'] . "</td>";
              echo "<td>" . $users[$i]['last_name'] . "</td>";
              echo "<td>" . $users[$i]['first_name'] . " " . $users[$i]['last_name'] . "</td>";
              echo "<td>" . strtoupper($users[$i]['first_name']) . " " . strtoupper($users[$i]['last_name']) . "</td>";
              $f_name_count = strlen($first_name);
              $l_name_count = strlen($last_name);
              $total = $f_name_count + $l_name_count;
              echo "<td>" . $total . "</td>";
              echo "<td>" . strlen($users[$i]['first_name']) . strlen($users[$i]['last_name']) . "</td>";
            echo "</tr>";
          }
        ?>
      </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
