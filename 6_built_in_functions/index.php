<?php

// NOTE: other built_in functions are on the Coding Dojo Platform

$sample_str = "I am a string with MANY words";
echo "<h2><em>These are built-in functions</em></h2>" . "<br>";

echo "<span style='color:blue'>STRING FUNCTIONS</span>" . "<br>";
echo "strlen:  " . strlen($sample_str) . "<br>";
echo "strtolower:  " . strtolower($sample_str) . "<br>";
echo "ucwords:  " . ucwords($sample_str) . "<br>";
echo "str_replace:  " . str_replace(" ", "--", $sample_str). "<br>";
echo "stristr:  " . stristr($sample_str, "with") . "<br>";
echo "strpos:  " . strpos($sample_str, "a") . "<br>";

echo "<br>";

echo "<span style='color:blue'>ARRAY FUNCTIONS</span>" . "<br>";
$arr = explode(' ', $sample_str);
echo "explode:  " . "<br>";
foreach ($arr as $key => $value)
{
  echo "&nbsp &nbsp key:  " . $key . " --> value:  " . $value . "<br>";
}
echo "count:  " . count($arr) . "<br>";
sort($arr);
echo "sort:  " . "<br>";
foreach ($arr as $key => $value)
{
  echo "&nbsp &nbsp key:  " . $key . " --> value:  " . $value . "<br>";
}
echo "implode:  " . implode(" ", $arr);

echo "<br><br>";

echo "<span style='color:blue'>ARRAY FUNCTIONS</span>" . "<br>";
echo "Is the string numeric : " . is_numeric($sample_str) . "<br>";
echo "Is the arr numeric : " . is_numeric($arr) . "<br>";
$number = 55;
echo "Is the number numeric : " . is_numeric($number) . "<br>";

echo "<br><br>";

echo "<span style='color:blue'>OTHER FUNCTIONS</span>" . "<br>";
$empty_value = '';
echo "Is this empty string empty : " . empty($empty_value) . "<br>";
echo "Is this empty string isset (set) : " . isset($empty_value) . "<br>";
echo "Is this non existant variable set : " . isset($non_existing_variable) . "<br>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//   NOTE: These are the other built-in functions that are on the Coding Dojo Platform
//
//   Functions for Strings
//   strlen - get string length
//   strtolower - make a string lowercase
//   strtoupper - make a string uppercase
//   ucwords - uppercase the first character of each word in a string
//   str_replace - replace all occurrences of the search string with the replacement string
//   stristr - find the first occurrence of a string
//   strpos - find the position of the first occurrence of a substring in a string
//   explode - split a string
//   implode - joins arrays to a string
//
//   Functions for Array
//   shuffle - shuffles the array
//   sort - sorts the array
//   count - counts the number of rows in the array
//   explode - breaks string into multiple values in the array
//   implode - joins information in the array as a string
//   array_pop - remove the last element in an array
//   array_push - adding elements into an array
//
//   Functions for Numbers
//   is_numeric(num) - returns true or false depending on whether or not the value is a number
//   rand(start, end) - generates a random number
//
//   Additional Functions
//   isset(var) - returns true if var is set and is not NULL
//   empty(var) - Returns FALSE if var exists and has a non-empty, non-zero value. Otherwise returns TRUE.
///////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
