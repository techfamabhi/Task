<?php
session_start();
if(isset( $_SESSION['email']))
{

}
else
{
  header('location:login.php');
}
?>
<?php
$connect = mysqli_connect("127.0.0.1:3307", "root", "", "task");

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
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
		<div class="container mt-4">
   
    <form class=" form-inline  my-lg-0">
      <input class="form-control mr-sm-2 col-md-12" type="search" name="search_text" id="search_text" placeholder="Search Job Title , Description , Recriture Name....." aria-label="Search">
    </form>
			<br />
			<br />
			<br />
			
			<br />
			<div id="result" class="row"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>






<?php
if (isset($_POST['enq_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $msg = $_POST['msg'];

  
$sql2="INSERT INTO `job_request`(`name`, `email`, `phone`, `address`, `gender`, `msg`) VALUES ('$name','$email','$phone','$address','$gender','$msg')";
$result1=mysqli_query($connect,$sql2);
if($result1)
{
    echo" <script>alert('Apply Job Successfully')</script>";

}
else{
    echo "Sorry";
}
}
?>

















<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




