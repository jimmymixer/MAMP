<?php
$first_name = "Jimmy ";
$last_name = "Park";
// PRINT OUT JUST THE NAME
echo $first_name;
echo $last_name;
$occupation = "Junior Developer";
// PRINT OUT A STRING
echo "My name is $first_name $last_name and I'm a $occupation  </br></br>";
// CONCATINATE A STRING (USE SINGLE QUOTES)
echo 'My name is ' . $first_name . ' ' . $last_name . ' and my occupation is ' . $occupation;
// CONCATINATE A STRING
$fake_name = "Michael";
echo "My name is " . $fake_name . ".";

echo "</br></br> <hr> </br></br>";

// STORING NUMBERS INTO VARIABLE AND ADD THEM
$num1 = 5;
$num2 = 7;
$result = $num1 + $num2;
echo $result;

echo "</br></br> <hr> </br></br>";

// PRE DEFINED VARIABLES
// Pre defined variable - something that is available in PHP
echo "This is the path of document root </br>";
echo $_SERVER['DOCUMENT_ROOT'];


?>
