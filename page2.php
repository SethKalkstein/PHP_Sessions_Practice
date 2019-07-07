<?php session_start();

?>

<?php require "templates/header.php"; ?>

<p>The sessions variable is set to <?php echo $_SESSION["name"] ?></p>

<p>If you would like to apend more words to the end of the session variable, please do so below: </p>

<form action="index.html" method="post">

</form>

<?php require "templates/footer.php"; ?>
