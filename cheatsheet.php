
How to go to localhost:8888
~start up MAMP
~in the web address type localhost:8888
~the add in the web address the / folder name / file name



<?php

  // Create an ARRAY
  $sample = array(3,4,2,5,65,3);

  // Create an ARRAY with key and value pairs (Associative Arrays)
  $likes = array("Oliver" => "Video games", "Dan" => "Football", "Melody" => "Ping pong");

  // Create an ARRAY within ARRAY (Multi-Dimensional) with key and value (Associative Arrays)

  $exams = array(array('title' => 'Yellow Belt Exam','language' => 'HTML & CSS'),array('title' => 'Red Belt Exam','language' => 'PHP using CodeIgniter'),array('title' => 'Black Belt Exam','language' => 'Ruby using Ruby on Rails'));

  // or

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

  // Access the ARRAY above
  echo $exams[0]['title'];  // prints out 'Yellow Belt Exam'
  echo $exams[1]['title'];  // prints out 'Red Belt Exam'
  echo $exams[2]['title'];  // prints out 'Black Belt Exam'

  // foreach loop for the ARRAY above
  foreach($exams as $exam) {
   echo "<p> {$exam['title']} - {$exam['language']} </p>";
  }

?>
