<?php session_start() ?>
<?php include 'game.php' ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
      <title> </title>
      <link rel="stylesheet" href="style.css">

    </head>

    <body>
     
        <h2>Hello there, Play with Computer!</h2>
        <h4 style="color: blueviolet;">Choose one from the below!</h4>
      
      <?php
      echo game();
      ?>
      
      <a href="login.php"><button class="button">Logout</button></a>
    </body>
</html>

