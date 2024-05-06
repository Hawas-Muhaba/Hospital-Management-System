<?php 

session_start();

include('./include/connection.php');

$error = array();

if(isset($_POST["login"])) {
    
    $username = isset($_POST["uname"]) ? $_POST["uname"] : "";
    $password = isset($_POST["pass"]) ? $_POST["pass"] : "";

    if ($username === "") {
    $error["admin"] = "Username is required";
    } else if ($password === "") {
        $error["admin"] = "Password is required";
    }

    if(count($error) == 0) {
        $query = "SELECT * FROM admin WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1) {
            echo "<script>alert('Logged in successfully')</script>";
            
            $_SESSION["admin"] = $username;
            header("Location: admin/index.php");
            exit();
        } else {
            // echo "<script>alert('Invalid username or password')</script>";
            $error["admin"] = "Invalid username or password";
        }
    }
}
?>



    <?php
		include('./include/header.php');
	?>
    
    
	<!-- <img class="wave" src="include/img/wave.png"> -->
	<div class="container">
		<div class="img">
			<img src="include/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="include/img/avatar.svg">
				<h2 class="title">Welcome</h2>
                <?php if(isset($error["admin"]) && $error["admin"] !== null): ?>
                    <div class="alert">
                        <?php echo $error["admin"]; ?>
                    </div>
                <?php endif; ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="uname" autocomplete="off" class="input" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pass" class="input" >
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" name="login" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="include/js/adminLogin.js"></script>
</body>
</html>