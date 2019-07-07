  <?php
    session_start();

    if(isset($_POST["submit"])){
      $_SESSION["name"] = $_POST["name"];
    }
   ?>

  <?php require "templates/header.php"; ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
  </form>
  <p>The sessions variable is set to <?php echo $_SESSION["name"]; ?></p>
  <?php require "templates/footer.php"; ?>
