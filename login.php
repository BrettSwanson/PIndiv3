<!DOCTYPE html>
<html>
  <head>
    <?php
      if (isset($_POST["insCheck"])) {
        echo("<meta http-equiv='refresh' content='0; instructor/welcome.php' />");
      }
      else {
        echo("<meta http-equiv='refresh' content='0; student/welcome.php' />");
      }
     ?>
    <meta charset="utf-8" />
    <title>PIndiv3</title>
  </head>
  <body>
<?php
  if (isset($_POST["insCheck"])) {

  }
 ?>
