<?php
/* Log out process, unsets and destroys session variables */
session_start();
$_SESSION['logged_in'] = false;
// require 'login.php';
session_unset();
session_destroy();
header("location: index.php");
?>
<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>

          <p><?= 'You have been logged out!'; ?></p>

          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html> -->
