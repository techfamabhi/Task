<?php
include('./connection.php');
$id=$_GET['id'];
//update the request
if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $msg = $_POST['msg'];
    $job_title = $_POST['title'];
    $job_description = $_POST['description'];


    $sql = "INSERT INTO `job_request`(`name`, `email`, `phone`, `address`, `gender`, `msg`, `title`, `description`) VALUES ('$name','$email','$phone','$address','$gender','$msg','$job_title','$job_description')";

    if (mysqli_query($conn, $sql)) {
        echo " <script>alert('Apply Job Successfully');</script>";
        echo"<script>
        window.location
        .href='home.php'
        </script>";
        
    } else {
        echo " <script>alert('Failed To Apply Job');</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Apply For Job</title>
</head>
<body>
     
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./home.php">Home <span class="sr-only">(current)</span></a>
      </li>

     
     
    </ul>
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
       <h2 class="text-center">Job Portal </h2>
      </li>
    </ul>

    <li class="nav-item" style="list-style: none;">
    <form action="logout.php" method="post">
                   <input name="return1" type="hidden" value="<?php echo urlencode($_SERVER['PHP_SELF']); ?>">
                   <input type="submit" value="LOGOUT" class="btn btn-primary"> 
                </form>
</li>
  </div>
</nav>
  <div class="container">
    <h3 class="text-primary text-center my-2"><b>Apply For Job</b></h3>
    <div class="row">
      <div class="col-sm-6">
        <?php        
          $sql = "SELECT * FROM job WHERE id= '$id'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);    
         
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="title"><b>Job title</b></label>
            <input type="text" class="form-control" name="title" id="title" value="<?php if (isset($row['title'])) {
                                                                                          echo $row['title'];
                                                                                  } ?>">
          </div>
        <div class="form-group">
            <label for="description"><b>Job Description</b></label>
            <input type="text" class="form-control" name="description" id="description" value="<?php if (isset($row['description'])) {
                                                                                          echo $row['description'];
                                                                                  } ?>">
          </div>
        


        <div class="form-group">
      <label for=""><b>Enter Full Name</b></label>
      <input type="text" name="name" id="name" pattern="[a-zA-Z'-'\s]*"  class="form-control" placeholder="" aria-describedby="helpId" required>
    </div>

    <div class="form-group">
      <label for=""><b>Enter Email ID</b></label>
      <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" placeholder="" aria-describedby="helpId" required>
    </div>

    <div class="form-group">
      <label for=""><b> Enter Phone </b></label>
      <input type="text" name="phone" id="phone" pattern="[7-9]{1}[0-9]{9}" 
         title="Phone number 9 digit with 0-9" class="form-control" placeholder="" aria-describedby="helpId" required>
    </div>
    <div class="form-group">
      <label for=""><b>Enter Address</b></label>
      <input type="text" name="address" pattern="[a-zA-Z'-'\s]*" id="address" class="form-control" placeholder="" aria-describedby="helpId" required>
    </div>
    <div class="form-group">
      <label for=""><b>Select Gender</b></label>
      <select class="form-control" name="gender" id="gender" required>
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="other">other</option>
      </select>
    </div>

    <div class="form-group">
             <label for="descriptions"
              class="float-left"><b>Msg</b></label>
             <textarea id="msg" class="form-control"
              name="msg" rows="3"
              placeholder="I am interested in your Job. Please get in contact with me." required></textarea>
     </div>
    



            
            
         
        
             <button type="submit" class="btn btn-success" name="submit">submit</button>
        </form>
      </div>

<div class="col-md-3">

</div>
      <div class="col-md-3 p-5 " >
    <div class="card p-3 mx-auto d-block"
     style="height:15rem;width:15rem;">
     <img
      class="card-img-top rounded-circle img-fluid mx-auto d-block "
      src="images/avatar.PNG" alt="" style="width: 5rem">
     <div class="card-body text-center">
      <h5 class="card-title font-weight-normal">abc
      </h5>
      <p class="card-text">abc@gmail.com</p>
      <p><span><i class="fa fa-phone-square"
         aria-hidden="true"></i></span>+919373960366</p>
     </div>
    </div>

   </div>
    </div>
  </div>
  </div>
</body>
</html>