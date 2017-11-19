<?php include('../common/header.php');?>
<div class="patlogin">



<?php

if(isset($_POST['submit']) && ($_POST['submit'] == "Submit")      ) 
{

	echo "acutal submit";
}

if(isset($_POST['submit']) && ($_POST['submit'] == "submit")      ) 
{

 $scon=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($scon,'test') or die(mysqli_error());
 $user_id=$_POST['user_id'];
 $user_pass=$_POST['user_pass'];



 if($user_id!=''&&$user_pass!='')
 {
	
   $query=mysqli_query($scon,"select * from user_reg where user_id='".$user_id."' and user_pass='".$user_pass."'") ;
   $res=mysqli_fetch_row($query);
   if($res)
   {
	session_start();
   $_SESSION['user_id']=$user_id;
   $_SESSION['user_type']="p";
   
	//header('location:index.php');
	$_SESSION['login'] = "1";
	
	header('Location: ../index.php');
	
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>



<div class="row">

    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary"> 
			<div class="panel-heading">Enter Your Details Here</div>
			<div class="panel-body">
				<form name="myform"  method="post">
					<div class="form-group">
						<label for="user_id">User Id*</label>
						<input id="user_id" name="user_id" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="user_pass">Password *</label>
						<input id="user_pass" name="user_pass" class="form-control" type="password" data-validation="email">
						<span id="error_user_pass" class="text-danger"></span>
					</div>
					<button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
				<a class="btn btn-primary center" href="../patient/pat_reg.php">Register First</a>

				</form>

			</div>
		</div>
	</div>
</div>

<?php include('../common/footer.php');?>
