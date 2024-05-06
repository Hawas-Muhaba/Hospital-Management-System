<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=MedievalSharp&family=Metal+Mania&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="./include/css/header.css?v=<?php echo time(); ?>">
	  <link rel="stylesheet"  href="./include/css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./include/css/adminPage.css?v=<?php echo time(); ?>">

    <script src="https://kit.fontawesome.com/c1b65d9ebe.js" crossorigin="anonymous"></script>
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
