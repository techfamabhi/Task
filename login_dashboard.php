<?php
session_start();
include('./connection.php');
if(isset($_POST['login']))
{    $username=$_POST['username'];
     $password=$_POST['password'];
     $_SESSION['email']=$username;
     $_SESSION['password']=$password;
	$sql="SELECT * FROM  regdashboard WHERE email='$username' && password='$password'";
	$result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num)
	
	{
		echo "Login sucessfully";
      header('location:dashboard.php');
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


    <style>
       
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
 
  height: 200px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.border{

    border:1px solid black;
    width: 400px;
    height: 200px;
margin-left: -122px;
}

    </style>
</head>
<body style="margin-top: 25px;">

<div class="card">
  <img src="./images/building-102840.jpg" alt="John" style="width:100%">
  
    <div class="container">
        <div class="col-sm-12 m-auto " style="width:50%">
            <div class="border">
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
                <p class="mt-3">if Not yet not a Register? <a href="reg_dashboard.php">REGISTER</a></p>
            </form>
        </div>
        </div>
    </div>
</body>
</html>