<?php include('./doctor/doc_header.php')?>
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

  //echo "Connected successfully";

    if (isset($_POST['submit'])) 
    {	
		
	  $doc_id=$_POST[ 'doc_id']; 
	  $doc_pass=$_POST[ 'doc_pass']; 
	  $doc_name=$_POST[ 'doc_name'];
	  $doc_age=$_POST['doc_age'];
	  $doc_dob=$_POST['doc_dob'];
	  $doc_address=$_POST[ 'doc_address'];
	  $doc_country=$_POST[ 'doc_country'];
	  $doc_zip=$_POST[ 'doc_zip']; 
	  $doc_email=$_POST[ 'doc_email']; 
	  $doc_gender=$_POST[ 'doc_gender'];	
	  $doc_phoneno=$_POST['doc_phoneno'];
	  $doc_catid=$_POST[ 'doc_catid'];
	  $doc_certificateno=$_POST[ 'doc_certificateno'];
	  $doc_certificateimage_path=$_POST[ 'doc_certificateimage_path'];
	  $doc_education=$_POST[ 'doc_education'];
	  $doc_desc=$_POST[ 'doc_desc']; 
	  $doc_special=$_POST['doc_special']


      //	$sql="INSERT INTO doc_reg(doc_id,doc_pass,doc_name,doc_age,doc_address,doc_country,doc_zip,doc_email,doc_gender,doc_phoneno,doc_catid,doc_certificateno,doc_certificateimage_path,doc_education,doc_desc) 
      //	VALUES ('$doc_id','$doc_pass','$doc_name','$doc_age','$date_of_bith','$doc_address','$doc_country','$ZIP_cpde','$mail','$gender','$doc_education','$about')";

	

	  $sql="INSERT INTO doc_reg(doc_id,doc_pass,doc_name,doc_age,doc_dob,doc_address,doc_country,doc_zip,doc_email,doc_gender,doc_phoneno,doc_catid,doc_certificateno,doc_certificateimage_path.doc_education,doc_desc,doc_special)
	  VALUES ('$doc_id','$doc_pass','$doc_name','$doc_age','$doc_dob','$doc_address','$doc_country','$doc_zip','$doc_email','$doc_gender','$doc_phoneno','$doc_category','$doc_certificateno','$doc_certificateimage_path','$doc_education','$doc_desc','$doc_special')";

	  //$result = mysqli_query($conn,$sql);


	   if ($conn->query($sql) === TRUE)
	    {
		  echo "New record created successfully";
	    } 
	   else
	    {
		 echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	
	   $conn->close();




    }


?>

<div class="row">

    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary"> 
			<div class="panel-heading">Enter Your Details Here</div>
			<div class="panel-body">
				<form name="myform"  method="post">
					<div class="form-group">
						<label for="doc_id">User Id*</label>
						<input id="doc_id" name="doc_id" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_pass">Password *</label>
						<input id="doc_pass" name="password" class="form-control" type="password" data-validation="email">
						<span id="error_doc_pass" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_name">User Name *</label>
						<input id="doc_name" name="doc_name" class="form-control" type="text" >
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_age">age *</label>
						<input id="age" name="age" class="form-control" type="int" >
						<span id="error_age" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_dob">Date Of Birth *</label>
						<input type="date" name="doc_dob" id="doc_dob" class="form-control">
						<span id="error_dob" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_address">Address *</label>
						<input id="doc_address" name="doc_address" class="form-control" type="text" >
						<span id="error_address" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_country">country *</label>
						<input id="doc_country" name="doc_country" class="form-control" type="text" >
						<span id="error_country" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_zip">ZIP CODE *</label>
						<input id="doc_zip" name="doc_zip" class="form-control" type="text" >
						<span id="error_zip" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_email">E-Mail *</label>
						<input id="doc_email" name="doc_email" class="form-control" type="text" >
						<span id="error_email;" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_gender">Gender</label>
						<select name="doc_gender" id="doc_gender" class="form-control">
							<option selected>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_phoneno">Phone Number *</label>
						<input type="text" id="doc_phoneno" name="doc_phoneno" class="form-control" >
						<span id="error_phone" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_catid">Category *</label>
						<input id="doc_category" name="doc_category" class="form-control" type="text" >
						<span id="error_category" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_certificateno">Certificate NO*</label>
						<input id="doc_certificateno" name="doc_certificateno" class="form-control" type="text" >
						<span id="error_certificateno" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_certificateimage_path">URL Certificate path *</label>
						<input id="doc_certificateimage_path" name="doc_certificateimage_path" class="form-control" type="text" >
						<span id="error_certificateimage_path" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_education">Education *</label>
						<input id="doc_education" name="doc_education" class="form-control" type="text" >
						<span id="error_education" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_description	">Discription</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>	
					<div class="form-group">
						<label for="doc_special	">Discription</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>					
					<button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
					<button id="gotoLogin"  value="Log In"  class="btn btn-primary center">Log in</button>

				</form>

			</div>
		</div>
	</div>
</div>
