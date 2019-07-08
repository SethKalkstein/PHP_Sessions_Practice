<?php
  session_start();

  if(isset($_POST["destruction"])){
    unset($_SESSION['name']);
  }
?>


<?php require "templates/header.php"; ?>

<p>Please press delete if you would like to destroy the session variable! </p>

<form action="<?php echo $_SYSTEM['PHP_SELF'] ?>" method="post">
  <input type="submit" name="destruction" value="destroy">
</form>


<p>The sessions variable is set to:
  <?php
    if(isset($_SESSION["name"])) {
      echo $_SESSION["name"];
    } else {
      echo "session variable has not been set yet, or is no longer set.";
    }
  ?>
</p>

<?php require "templates/footer.php"; ?>
