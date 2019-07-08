  <?php
    require "templates/header.php";

    if(isset($_POST["submit"])){
      $_SESSION["name"] = $_POST["name"];
    }
   ?>

  <p>Session variable will be set to the value you enter: </p>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Enter session value here: </label>
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
  </form>

  <?php require "templates/footer.php"; ?>
