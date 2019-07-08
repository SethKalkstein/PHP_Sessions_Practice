<?php
  session_start();
//check to see if number has been submitted and that the session variable already exists
if (isset($_POST["alter"]) && isset($_SESSION["name"])) {
  //check to see if the entry is a digit and is less than the session variable string length
  if(ctype_digit($_POST["alter_number"]) and $_POST["alter_number"] <= strlen($_SESSION["name"])){
    $_SESSION["name"] = substr($_SESSION["name"],0 , -$_POST["alter_number"]);
  } else {
    echo "Invalid Entry";
  }
}

 ?>

<?php require "templates/header.php"; ?>

<p>How many characters would you like to remove from the end of the session variable?</p>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <label>Enter number (integer only) here:</label>
  <input type="text" name="alter_number">
  <input type="submit" name="alter" value="remove">
</form>

<p>The sessions variable is set to <?php echo $_SESSION["name"] ?></p>

<?php require "templates/footer.php"; ?>
