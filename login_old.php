<?php
session_start();

$conn=mysqli_connect("localhost","root","","details_flat");
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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-sm-12 m-auto " style="width:50%">
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" required class="form-control" required>
                </div>
                <input type="submit" name="login" class="form-control btn-primary">
                <p class="mt-3">if Not yet not a Register? <a href="registration.php">REGISTER</a></p>
            </form>
        </div>
    </div>
</body>
</html>