<?php

  session_start();
  //check that form has been submitted
  if(isset($_POST["submition"])){
    //only allo addition if the variable already exists
    if(isset($_SESSION["name"])){
      $_SESSION["name"] .= $_POST["addition"];
    } else {
      echo "This operation is only allowed if the the session variable is already set";
    }
  }
?>

<?php require "templates/header.php"; ?>

<p>The sessions variable is set to <?php echo $_SESSION["name"] ?></p>

<p>If you would like to apend more words to the end of the session variable, please do so below: </p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <label>Enter addition here: </label>
  <input type="text" name="addition">
  <input type="submit" name="submition" value="submit">
</form>

<?php require "templates/footer.php"; ?>
