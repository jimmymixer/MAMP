<?php
session_start();
// print out the session id that we set
echo $_SESSION['id'];
// If user tries to visit home page and user is not logged in, then redirect the user back to login page.
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
    // do nothing
  } else {
    header('Location: login.php');
  }
?>

<p>Home</p>
