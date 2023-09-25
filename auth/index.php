<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "agat");


if( isset($_POST['submit']) ){
	$email = $_POST['txt_email'];
	$pass = $_POST['txt_pass'];
	$level = $_POST['txt_level'];
	if(!empty(trim($email)) && !empty(trim($pass))){
		//select data berdasarkan username dari database
		$query      = "SELECT * FROM login WHERE user_email = '$email'";
		$level 			= "SELECT * FROM login WHERE level = '1'";
    $result     = mysqli_query($koneksi, $query);
    $num       = mysqli_num_rows($result);
		while ($row = mysqli_fetch_array($result)){
			$userVal = $row['user_email'];
			$passVal = $row['user_password'];
			$userName = $row['user_fullname'];
			$levelVal = $row['level'];
		}

		if ($num != 0) {
			if($userVal==$email && $passVal==$pass && $levelVal=='1'){
				echo '<div class="alert alert-success"> </div>';
				header('Location: landingadmin.php?user_fullname' . urlencode($userName));
			}else if($userVal==$email && $passVal==$pass && $levelVal=='2'){
					echo '<div class="alert alert-success"> </div>';
					header('Location: landing.php?user_fullname' . urlencode($userName));
				}else{
				echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
			}
		}else{
			echo "<script>alert('Woops! Email or Password tidak ditemukan.')</script>";
		}
	}else{
		echo "<script>alert('Woops! Data tidak boleh kosong.')</script>";
		echo $error;
	}
}
?>

<html>
<head>
	<title>Sign In AGAT BIBIT</title>
	<link rel="stylesheet" type="text/css" href="css/fix.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="img/signinn.png">
	<div class="container">
		<div class="img">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/logo.png">
				<h2 class="title">Sign In</h2>
        <p>Enter your email and password to log on</p>

           		<div class="input-div two">
           		   <div class="i">
           		   		<i class="fa fa-envelope icon"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="txt_email" class="input" required></p>
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="txt_pass" class="input" required></p>
            	   </div>
            	</div>

              <input type="submit" name="submit" class="btn" value="Sign In">

              <div class="container-signin">
      					<p>Don't have an account? <a href="register.php">Sign Up</a></p>
      				</div>

            </form>

        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
