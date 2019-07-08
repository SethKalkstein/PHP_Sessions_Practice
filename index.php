  <?php
    session_start();

    if(isset($_POST["submit"])){
      $_SESSION["name"] = $_POST["name"];
    }
   ?>

  <?php require "templates/header.php"; ?>

  <p>Session variable will be set to the value you enter: </p>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Enter session value here: </label>
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
  </form>
  <p>The sessions variable is set to <?php echo $_SESSION["name"]; ?></p>
  <?php require "templates/footer.php"; ?>
