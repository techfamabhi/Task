<?php
include('./connection.php');
if (isset($_POST['submit']))
{

$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$sql="INSERT INTO `regdashboard`( `name`, `email`, `password`, `address`)
 VALUES ('$fullname','$email','$password','$address')";
 if (mysqli_query($conn, $sql))
 {
     echo "New record created successfully <hr>";
     header('location:login_dashboard.php');
 } else
 {
     echo "Unable to Insert Data";
 }

}
?>
<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <title>Hello, world!</title>
</head>

<body>
 <div class="container mt-5">
  <div class="m-auto" style="width: 50%;">
  <h1>Registration </h1>
 <form method="post" action="">
  <div class="form-group">
   <input id="name" class="form-control" type="text" name="fullname" placeholder="Full Name" required>
  </div>
 
  <div class="form-group">
   <input id="Email" class="form-control" type="email" name="email" placeholder="Email" required>
  </div>

  <div class="form-group">
   <input id="password" class="form-control" type="password" name="password" placeholder="Password" required>
  </div>

  <div class="form-group">
   <input id="address" class="form-control" type="text" name="address" placeholder="Address" required>
  </div>
  <button type="submit" class="btn btn-primary btn btn-block" name="submit">Submit</button>
  <p>if you are already registered ?<a href="login_dashboard.php">Login</a></p>
 </form>
  </div>
 </div>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>