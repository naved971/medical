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
   if ($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

   if (isset($_POST['submit'])) 
    {	

     $user_id=$_POST['user_id'];
     $user_pass=$_POST['user_pass'];
     $user_name=$_POST['user_name'];
     $user_age=$_POST['user_age'];
     $user_dob=$_POST['user_dob'];
     $user_email=$_POST['user_email'];
     $user_gender=$_POST['user_gender'];
     $user_phone=$_POST['user_phone'];
     $user_maritual_status=$_POST['user_maritual_status'];
     $user_desc=$_POST['user_desc'];

     $sql="INSERT INTO user_reg(user_id,user_pass,user_name,user_age,user_dob,user_email,user_gender,user_phone,user_maritual_status,user_desc)
	 VALUES ('$user_id','$user_pass','$user_name','$user_age','$user_dob','$user_email','$user_gender','$user_phone','$user_maritual_status','$user_desc')";

	  if ($conn->query($sql) === TRUE)
	    {
		  echo '<script>alert("New record created successfully")</script>';
		}
	 else
	    {
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
            <form name="myform"  action="pat_reg.php" method="post">
				<div class="form-group">
					<label for="user_id">User Id*</label>
					<input id="user_id" name="user_id" class="form-control" type="text" data-validation="required">
					<span id="error_name" class="text-danger"></span>
				</div>
				<div class="form-group">
				<label for="password">Password *</label>
				<input id="user_pass" name="user_pass" class="form-control" type="password" data-validation="password">
					<span id="error_password" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label for="username">User Name *</label>
					<input id="username" name="user_name" class="form-control" type="text" >
					<span id="error_age" class="text-danger"></span>
				</div>
				<div class="form-group">
						<label for="user_age">age *</label>
						<input id="age" name="user_age" class="form-control" type="int" >
						<span id="error_age" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label for="dob">Date Of Birth *</label>
					<input type="date" name="user_dob" id="dob" class="form-control">
					<span id="error_dob" class="text-danger"></span>
				</div>
                <div class="form-group">
						<label for="user_email">E-Mail *</label>
						<input id="user_email" name="user_email" class="form-control" type="text" >
						<span id="error_email;" class="text-danger"></span>
					</div>
				<div class="form-group">
					<label for="gender">Gender</label>
					<select name="user_gender" id="gender" class="form-control">
						<option selected>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
					<span id="error_gender" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label for="phone">Phone Number *</label>
					<input type="text" id="phone" name="user_phone" class="form-control" >
					<span id="error_phone" class="text-danger"></span>
				</div>
                <div class="form-group">
						<label for="user_maritual_status">Maritual Status*</label>
						<select name="user_maritual_status" id="maritual_status" class="form-control">
						<option>Not-Married</option>
                        <option>Married</option>
					</select>
						<span id="error_education" class="text-danger"></span>
					</div>
				<div class="form-group">
					<label for=" desc">Discription</label><input name="user_desc" rows="6">
					<textarea class="form-control" rows="6"></textarea> </input>
				</div>  
				<button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
				<a href="../patient/pat_login.php" class="btn btn-primary center">Already registered?</a>
				
			</form>
        </div>
	</div>
  
</div>

<?php include('../common/footer.php');?>