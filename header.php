<?php
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
    header("location: index.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $_SESSION['last-activity'] = time();
    $lastActivity = $_SESSION['last-activity'];
}

?>
<!DOCTYPE html>
<html>
<head>
  <?php
    include 'css/css.html';
  ?>
</head>
