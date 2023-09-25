<?php
require ('koneksi.php');
require ('query.php');

$obj = new crud;

if($_SERVER['REQUEST_METHOD']=='POST'):
	$email = $_POST['txt_email'];
	$pass = $_POST['txt_pass'];
	$name = $_POST['txt_name'];
	$level = $_POST['txt_level'];
	$query = "INSERT INTO login VALUES ('','$email','$pass','$name',2)";
	
	if($obj->insertData($email, $pass, $name)):
		echo '<div class="alert alert-success">  </div>';
		header('Location: index.php');
	else:
		echo '<div class="alert alert-danger">  </div>';
		header('Location: register.php');
	endif;
endif;
?>

<html>
<head>
	<title>Sign Up AGAT BIBIT</title>
	<link rel="stylesheet" type="text/css" href="css/fix.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="img/signupp.png">
	<div class="container">
		<div class="img">
		</div>
		<div class="login-content">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<img src="img/logo.png">
				<h2 class="title">Sign Up</h2>
				<p>Please fill in this form to create an account</p>

				<div class="input-div one">
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

				<div class="input-div two">
					 <div class="i">
							<i class="fas fa-user"></i>
					 </div>
					 <div class="div">
							<h5>Username</h5>
							<input type="text" name="txt_name" class="input" required></p>
					 </div>
				</div>


				<input type="submit" class="btn" value="Sign Up">

				<div class="container-signin">
					<p>Already have an account? <a href="index.php">Sign In</a></p>
				</div>

			</form>

			</div>
		</div>
		<script type="text/javascript" src="js/main.js"></script>

	</body>


</html>
