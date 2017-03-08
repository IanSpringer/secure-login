<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
$_SESSION['logged_in'] = false;


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    }

    elseif (isset($_POST['register'])) { //user registering

        require 'register.php';

    }
}

require 'header.php';
?>


<body>
  <title>Sign-Up/Login Form</title>

  <div class="form">

 <!--      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul> -->

      <div class="tab-content">

         <div id="login">
          <h1>You must log in to access this page.</h1>
          <!-- <div class="error"> -->
            <?php
              echo $_SESSION['message'];
            ?>
          <!-- </div> -->
          <form action="index.php" method="post" autocomplete="off">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" autocomplete="on" class="email-input" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" style="display: none;"/>
            <input type="password" autocomplete="off" class="password-input" name="password"/>
          </div>

          <!-- <p class="forgot"><a href="forgot.php">Forgot Password?</a></p> -->

          <button class="button button-block" name="login" />Login</button>

          </form>

        </div>

        <div id="signup">
          <!-- <h1>Sign Up for Free</h1> -->

          <!-- <form action="index.php" method="post" autocomplete="off">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>

          <button type="submit" class="button button-block" name="register" />Register</button>

          </form> -->

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
