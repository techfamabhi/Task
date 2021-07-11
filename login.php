<?php
session_start();
include('./connection.php');


if(isset($_POST['login']))
{    $username=$_POST['username'];
     $password=$_POST['password'];

     $_SESSION['email']=$username;
     $_SESSION['password']=$password;
	$sql="SELECT * FROM  user_reg WHERE email='$username' && password='$password'";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);
	if($num)
	{
		echo "Login sucessfully";
		header('location:home.php');
	}
	else
	{
		echo "incorrect username or password";
	}
}
?>
<!DOCTYPE html>
<html>

<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginform_design/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginform_design/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginform_design/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginform_design/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./loginform_design/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginform_design/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginform_design/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./loginform_design/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginform_design/css/util.css">
	<link rel="stylesheet" type="text/css" href="./loginform_design/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn  type="submit" name="login"">
							Login
						</button>
					</div>

                    <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
                        <p class="mt-3">if Not yet not a Register? <a href="registration.php">REGISTER</a></p>		</span>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('./loginform_design/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="./loginform_design/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./loginform_design/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./loginform_design/vendor/bootstrap/js/popper.js"></script>
	<script src="./loginform_design/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./loginform_design/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./loginform_design/vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./loginform_design/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./loginform_design/js/main.js"></script>

</body>
</html>