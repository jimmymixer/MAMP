<?php
session_start();
// print the session id that we set
echo $_SESSION['id'];
if(! isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != TRUE) {
  header('Location: login.php');
} else {
  if($_SESSION['id'] == 1) {
    echo "Oliver";
  }
  if($_SESSION['id'] == 2) {
    echo "Michael";
  }
}
?>
<h1>Profile</h1>
