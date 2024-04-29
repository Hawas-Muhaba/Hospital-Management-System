<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="./include/css/header.css?v=<?php echo time(); ?>">    
    <title>Hospital Management system</title>
  </head>
  <body>
    <nav class="navbar">
      <div>
        <h5 class="nav-logo"><a href="index.php">Tena HMS</a></h5>
        <ul class="nav-menu">
          <?php
            if(isset($_SESSION["admin"])) {
              $user = $_SESSION["admin"];

              echo 
              '<li><a href="#">'.$user.'</a></li>
              <li><a href="#">Logout</a></li>';
            } else {
              echo 
              '<li><a href="adminlogin.php">Admin</a></li>
              <li><a href="logout">Doctor</a></li>
              <li><a href="#">Patient</a></li>';
            }
          ?>
        </ul>
      </div>
    </nav>
  </body>
</html>