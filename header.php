<?php
session_start();
$url = $_SERVER['REQUEST_URI'];
if ( $_SESSION['logged_in'] != 1 ) {
    header("location: index.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $loginTime = $_SESSION['login_time'];
    $now = time();
    if($now - $loginTime > 60 * 30){
      session_destroy();
      header("location: index.php");
    }else{
      $_SESSION['login_time'] = $now;
      $now = time();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <?php
    include 'css/css.html';
  ?>
</head>
