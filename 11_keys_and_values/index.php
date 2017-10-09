<?php

  function key_values($array){
    echo "There are 2 keys in this aray: " . "<br>";
    foreach ($array as $key => $value) {
      echo $key . "<br>";
    }
    foreach ($array as $key => $value) {
      echo "The value in the key " . $key . " is " . $value . "<br>";
    }
  }

  $users = array('first_name' => 'Michael', 'last_name' => 'Choi');
  key_values($users);

?>
