
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=MedievalSharp&family=Metal+Mania&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1b65d9ebe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./include/css/adminPage.css?v=<?php echo time(); ?>">
    <title>Admin Login Page</title>
</head>
<body>
    <?php
        // include('./include/header.php');
    ?>
    
    <div class="admin-login-outer-wrapper">
        <div class="admin-login-container">
            <div class="admin-login-inner-wrapper">
                <div class=""></div>
                <div class="">
                    <form action="" method="post">
                        <div class="">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Enter your username">
                        </div>
                        <div class="">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter your password">
                        </div>

                        <input type="submit" name="login">
                    </form>
                </div>
                <div class=""></div>
            </div>
        </div>
    </div>
</body>
</html>