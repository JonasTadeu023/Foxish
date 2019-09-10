<?php
      session_start();
      include('../dbh.php');

      echo $_SESSION['ID'];
?>