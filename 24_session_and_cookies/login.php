<?php
session_start();
$_SESSION = array();
// Only allow users to access login page if user is not yet logged in, else redirect the user to the homepage
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
    header('Location: home.php');
  } else {
    $_SESSION['logged_in'] = TRUE;
    $_SESSION['id'] = 2;
  }
?>
<h1>Login</h1>
