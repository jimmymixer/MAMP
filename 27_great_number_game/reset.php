<?php
session_start();
session_destroy();
// $_SESSION['rand_number'] = rand(1,100);
// $_SESSION['count'] = 0;
header('Location: index.php');

?>
