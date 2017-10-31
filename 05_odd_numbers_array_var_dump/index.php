<?php
// --------  PRINT OUT ODD NUMBERS AND VAR_DUMP  ---------//

// $test_array = array();
//
// for($i = 0; $i < 200; $i++)
// {
//   if($i % 2 == 1)
//   {
//     // echo '<br>';
//     // echo '**** <br>';
//     array_push($test_array, $i);
//     // echo '### <br>';
//     // echo $i . '<br>';
//     // print_r($test_array);
//     echo '<br>';
//     var_dump($test_array);
//   }
// }

// --------  FOREACH STATEMENTS  ------------------------- //

// THIS PRINTS THE INDEX AND THE VALUE OF THAT INDEX
$x = array(1,3,5,7);
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

// THIS JUST PRINTS THE VALUE OF THAT INDEX
$x = array(1,3,5,7);
foreach($x as $value)
{
  echo $value ."<br />";
}

// --------  MULTI-DIMENSIONAL ARRAYS  -------------------- //

$exams = array(
 array(
  'title' => 'Yellow Belt Exam',
  'language' => 'HTML & CSS'
 ),
 array(
  'title' => 'Red Belt Exam',
  'language' => 'PHP using CodeIgniter'
 ),
 array(
  'title' => 'Black Belt Exam',
  'language' => 'Ruby using Ruby on Rails'
 )
);

echo $exams[0]['title'];

// --------  FOR LOOPS ----------------------------------- //

$pupils = array(
  array("Randall", "Frisk", 27),
  array("Michael", "Choi", 33),
  array("Charles", "Holloman", 55),
);

for ($i=0; $i < count($pupils); $i++)
{
  for ($j=0; $j < count($pupils[$i]); $j++)
  {
    echo $pupils[$i][$j] . ' ';
  }
  echo '<br>';
}

// --------  MULTI-DIMENSIONAL ARRAY  -------------------- //
// --------  FOREACH LOOP -------------------------------- //

//  IN MULTI-DIMENSIONAL ASSOCIATIVE ARRAYS WE CAN NOT
//  USE THE NUMBERICAL INDEX OF THE ARRAYS ESPECIALLY
//  WHEN USING A FOR LOOP.  IN THIS CASE WE WILL HAVE
//  TO USE A FOREACH LOOP

$students = array(
              array("first_name" => "Randall", "last_name" => "Frisk", "age" => 27),
              array("first_name" => "Michael", "last_name" => "Choi", "age" => 33),
              array("first_name" => "Charles", "last_name" => "Holloman", "age" => 93),
);

// foreach ($variable as $key => $value)
// foreach ($variable as $value)
foreach ($students as $row)
{
  foreach ($row as $info => $value)
  {
    echo $info . ' ' . $value . ' ';
  }
  echo '<br>';
}


////////////////////////////////////////////
// LEFT OFF WITH MULTI-DIMENSIONAL ARRAYS //
////////////////////////////////////////////



?>
