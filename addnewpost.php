<?php
session_start();
if(isset( $_SESSION['email']))
{

}
else
{
  header('location:login_dashboard.php');
}
?>









<?php
include('dashboard.php');
?>





<?php

include('./connection.php');
if (isset($_POST['job_submit'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $recruiter_name = $_POST['recruiter_name'];
  $location = $_POST['location'];


  $sql = "INSERT INTO `job`(`title`, `description`, `recruiter_name`, `location`) VALUES ('$title','$description','$recruiter_name','$location')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "data inserted successfully";
    echo"<script>
    window.location.href='index_post.php'
    </script>";
  } else {
    echo "failed";
  }
}




?>

<!doctype html>
<html lang="en">

<head>
 <title>agent_fetch</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
</head>

<body>
 
<div class="container">          
    
    <h3 class="text-center">ADD POST</h3>
    <form action="" method="post">
    <div class="form-group">
      <label for="">title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for="">description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for="">recruiter_name</label>
      <input type="text" name="recruiter_name" id="recruiter_name" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Location</label>
      <input type="text" name="location" id="location" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
  <button type="submit" name="job_submit" class="btn btn-primary">Submit</button>

    </form>

    </div>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
 <script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
 <script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>
</body>

</html>