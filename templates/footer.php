      <p><?php echo $error_message; ?></p>
      </br>
      <p>The sessions variable is set to:
        <?php
          if(isset($_SESSION["name"])) {
            echo $_SESSION["name"];
          } else {
            echo "session variable has not been set yet, or is no longer set.";
          }
        ?>
      </p>
    <footer>
      <p>Thank you for playing the sessions game</p>
    </footer>
  </body>
</html>
