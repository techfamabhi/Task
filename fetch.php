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
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM job 
	WHERE title LIKE '%".$search."%'
	OR description LIKE '%".$search."%' 
	OR recruiter_name LIKE '%".$search."%' 
	OR location LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM job ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	
	while($record = mysqli_fetch_array($result))
	{
        ?>
		$output .= '

        <td>'
                <div class="col-md-4">           
        <div class="card ml-5" style='width: 18rem;height:22rem'>
            <div class="card-body">
                    <h5 class="card-title"><?php echo $record['title']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted mt-1"><?php echo $record['recruiter_name']; ?></h6>
                
                    <div class="row mt-2">
                        <div class="col-md-6">
                                <i class="fa fa-suitcase" aria-hidden="true">
                                    <span class="mx-2">0-6 Years</span>
                                </i>
                        </div>                    
                            <div class="col-md-6">
                                <i class="fa fa-map-marker" aria-hidden="true">
                                    <span class="mx-2"><?php echo $record['location']; ?></span>
                                </i>
                            </div>
                    </div>
                    <div class="row mt-3">
                        <div class="container">
                        <p><?php echo $record['description']; ?></p>
                        </div>
                    </div>
                    <!-- <button type="button" class="btn btn-primary btn btn-block" data-toggle="modal" data-target="#exampleModal">
                      <b>  Apply Job</b>
                </button> -->
                <div class="d-flex justify-content-between align-items-center">
      <a href="request_job.php?id=<?php echo $record['id'] ?>" class="btn btn-primary btn btn-block">Apply For Job</a>
      </div>

            </div>
        </div>
    </div>
                
                '</td>
				
			
		';
      
       
	
    <?php }?>
    <?php
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>






<?php
if (isset($_POST['enq_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $msg = $_POST['msg'];

  
$sql2="INSERT INTO `job_request`(`name`, `email`, `phone`, `address`, `gender`, `msg`) VALUES ('$name','$email','$phone','$address','$gender','$msg')";
$result1=mysqli_query($conn,$sql2);
if($result1)
{
    echo" <script>alert('Apply Job Successfully')</script>";

}
else{
    echo "Sorry";
}
}
?>




<!-- Button trigger modal -->

<!-- Modal -->
<form action="" method="post">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for="">Phone</label>
      <input type="text" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" name="address" id="address" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Select Gender</label>
      <select class="form-control" name="gender" id="gender">
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="other">other</option>
      </select>
    </div>

    <div class="form-group">
             <label for="descriptions"
              class="float-left">Msg</label>
             <textarea id="msg" class="form-control"
              name="msg" rows="3"
              placeholder="I am interested in your property. Please get in contact with me."></textarea>
     </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="enq_submit" class="btn btn-primary">Submit</button>

</div>
    </div>




  </div>
</div>
</form>
