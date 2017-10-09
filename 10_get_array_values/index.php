<?php

  function get_values($array){
    echo "<ul>";
    foreach ($array as $value) {
      echo "<li>" . $value;
    }
    echo "</ul>";
  }

  $A = array(2, 3, "Hello");
  get_values($A);

?>
