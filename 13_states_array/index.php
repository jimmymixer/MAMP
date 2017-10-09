<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>states array</title>
    <style media="screen">
      h3{
        color: #990000;
      }
    </style>
  </head>
  <body>

    <h3>Make a drop down list.  Use a for loop to go thru all the states.</h3>

    <form>
      <select>
        <?php
          $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
          for ($i=0; $i < count($states); $i++) {
          echo '<option value="$states[$i]">' . $states[$i] . '</option>';
          }
        ?>
      </select>
    </form>

    <h3>Make another drop down list.  Use foreach loop to thru all the states</h3>

    <form>
      <select>
        <?php
          $us_states = array('CA', 'WA', 'VA', 'UT', 'AZ','NJ', 'NY', 'DE');
          foreach ($us_states as $value) {
            echo '<option value="$value">' . $value . '</option>';
          }
        ?>
      </select>
    </form>

  </body>
</html>
