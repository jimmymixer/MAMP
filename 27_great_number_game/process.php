<?php
session_start();

$rand_number = $_SESSION['rand_number'];
$guess_number = $_POST['guess_number'];

if ($guess_number > $rand_number) {
  header('Location: high.php');

} elseif ($guess_number < $rand_number) {
  header('Location: low.php');

} else {
  header('Location: success.php');

}

?>
