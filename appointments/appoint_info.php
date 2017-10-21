<?php include('../common/header.php');?>
<div class="row patregis">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";

if (isset($_POST['submit'])) 
{	

    $appointment_id=$_POST['appointment_id'];
    $user_id=$_POST['user_id'];
    $doc_id=$_POST['doc_id'];
    $date_info=$_POST['date_info'];

   
    $sql="INSERT INTO appointment(appointment_id,user_id,doc_id,date_info)
    VALUES ('$appointment_id','$user_id','$doc_id','$date_info')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
   
    }
    ?>
    

<div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
	<div class="panel panel-primary"> 
		<div class="panel-heading">Enter Your Details Here
		</div>
		<div class="panel-body">
        <form name="myform"  method="post">
				<div class="form-group">
					<label for="appoinment_id">appoinment Id*</label>
					<input id="appointment_id" name="appointment_id" class="form-control" type="text" data-validation="required">
					<span id="error_age" class="text-danger"></span>
				</div>
				<div class="form-group">
				<label for="user_id">User-id *</label>
				<input id="user_id" name="user_id" class="form-control" type="text" data-validation="name">
					<span id="error_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label for="doc_id">Doc-id *</label>
					<input id="doc_id" name="doc_id" class="form-control" type="text" >
					<span id="error_name" class="text-danger"></span>
				</div>
				<div class="form-group">
						<label for="date_info">Information *</label>
						<input id="date_info" name="date_info" class="form-control" type="int" >
						<span id="error_age" class="text-danger"></span>
				</div>
                <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
        </form>
      </div>
	</div>
  
</div>

<?php include('../common/footer.php');?>