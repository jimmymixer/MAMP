<?php

// NOTE: Defining functions

echo "<h2><em>These are defining functions</em></h2>" . "<br>";

$samples = array("abc", "def", "ghi");
echo "There are " . count($samples) . "values in the array." . "<br>" ;
// Print out all the values in the ARRAY
foreach ($samples as $value){
  echo $value . "<br>";
}

$samples = array("John", "Noah", "Mark");
echo "There are " . count($samples) . "values in the array." . "<br>";
// Print out all the values in the ARRAY
foreach ($samples as $value){
  echo $value . "<br>";
}

$samples = array(22, 55, 444);
echo "There are " . count($samples) . "values in the array." . "<br>";
// Print out all the values in the ARRAY
foreach ($samples as $value){
  echo $value . "<br>";
}

// Here is a shorter way of doing this.
function print_array($array){
  echo "These are " . count($array) . "values in the array." . "<br>";
  foreach($array as $value){
    echo $value . "<br>";
  }
}
$samples = array("Tommy", "Lisa", "Michelle", "Chris");
print_array($samples);

// Here is another basic function
function my_function(){
  $things = "This is my StuFF" . "<br>";
  return $things;
}
echo her_function();

// Here is another function
function her_function(){
  $things = "PHP used to stand for Personal Home Page but not stands for Hypertext Preprocessor" . "<br>";
  return $things;
}
$some_other_variable = her_function();
echo $some_other_variable;

// Here is another function with Multi-Dimensional Associative Arrays
$raw_materials = array(
  array(
    "rubber" => "Natural Rubber",
    "metal" => "Alloy",
    "paint" => "Green"
  ),
  array(
    "rubber" => "Nitrile",
    "metal" => "Brass",
    "paint" => "Red"
  )
);
foreach ($raw_materials as $raw_material){
  echo "<p> Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires </p>" . "<br>";
}

// Here is another BETTER way for the function above
function car_factory($materials){
  $cars = array();
  foreach ($materials as $material) {
    $cars[] = "<p> Just produced a {$material['paint']} car that used {$material['metal']} for the body and {$material['rubber']} </p>" . "<br>";
  }
  return $cars;
  // echo $cars;
}

$materials = array(
  array(
    "rubber" => "Natural Rubber",
    "metal" => "Alloy",
    "paint" => "Green"
  ),
  array(
    "rubber" => "Nitrile",
    "metal" => "Brass",
    "paint" => "Red"
  )
);

$cars = car_factory($materials);
var_dump($cars);

?>
