<?php

$A = array(2,4,5,8,10,20,22,45);
function multiple($array,$factor){
  foreach ($array as $value) {
    echo $value * $factor . "<br>";
  }
}

$B = multiple($A,6);
var_dump($B);

?>
