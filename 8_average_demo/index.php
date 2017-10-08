<?php
//   NOTE: Average Demo

function print_average($array){
  $number_of_values = count($array);
  $total = 0;
  foreach ($array as $value){
    $total = $total + $value;
    echo "Current total: " . $total . "<br>";
  }
  $avg = $total / $number_of_values;
  echo "The avg: " . $avg . "<br>";
}

$numbers = array(22, 44, 55, 66, 77);
print_average($numbers);

?>

<?php

function total_average($array){
  $total_num_of_val = count($array);
  $cur_total = 0;
  foreach ($array as $value) {
    $cur_total = $cur_total + $value;
  }
  $new_avg = $cur_total / $total_num_of_val;
  // echo "This is the second average:  " . $new_avg . "<br>";
  return $new_avg;
}
$random_array = array(34,2,666,88,56);
$final_avg = total_average($random_array);
echo $final_avg;

?>
