<?php
  session_start();
?>


<?php require "templates/header.php"; ?>



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
