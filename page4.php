<?php
  require "templates/header.php";
  if(isset($_POST["destruction"])){
    unset($_SESSION['name']);
  }
?>

<p>Please press delete if you would like to destroy the session variable! </p>

<form action="<?php echo $_SYSTEM['PHP_SELF'] ?>" method="post">
  <input type="submit" name="destruction" value="destroy">
</form>

<?php require "templates/footer.php"; ?>
