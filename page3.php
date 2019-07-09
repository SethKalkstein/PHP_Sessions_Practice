<?php
  require "templates/header.php";
  //check to see if number has been submitted and that the session variable already exists
  if (isset($_POST["alter"]) && isset($_SESSION["name"])) {
    //check to see if the entry is a digit and is less than the session variable string length
    if(ctype_digit($_POST["alter_number"]) and $_POST["alter_number"] <= strlen($_SESSION["name"])){
      $_SESSION["name"] = substr($_SESSION["name"],0 , -$_POST["alter_number"]);
    } else {
      $error_message = "Invalid Entry";
    }
  }
?>
  <p>How many characters would you like to remove from the end of the session variable?</p>
  <!-- form to intake the number of characters that will be removed from the session variable -->
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Enter number (integer only) here:</label>
    <input type="text" name="alter_number">
    <input type="submit" name="alter" value="remove">
  </form>

<?php require "templates/footer.php"; ?>
