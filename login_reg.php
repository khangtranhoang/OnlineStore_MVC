<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login_css.css">
</head>
<?php
    session_start();
    if(isset($_SESSION['user'])){
      // header('Location: index.html');
      header("Location: index.php");
    }
?>
<form action="Controller/userController.php" method="post">
  <div class="container">
    <label for="username_label"><b>Username</b></label>
    <?php if(isset($_SESSION['login fail']))  echo '<p style="color:red">Incorrect username or password</p>'?>
    <input type="text" placeholder="Enter Username" name="username_login" required>
    <label for="passwd_label"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd_login" required>
    <input type="submit" class="button" name="btnAction" value="login">

  </div>
  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form> 
</html>