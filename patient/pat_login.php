<?php include('../common/header.php');?>
<div class="row patlogin">

<?php


if(isset($_POST['submit']))
{

 $scon=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($scon,'test') or die(mysqli_error());
 $user_id=$_POST['user_id'];
 $user_pass=$_POST['user_pass'];
 if($user_id!=''&&$user_pass!='')
 {
   $query=mysqli_query("select * from login where name='".$user_id."' and password='".$user_pass."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['user_id']=$user_id;
    header('location:index.php');
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
          <input type="button" value="Home" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'pat_reg.php';" />
				<!--	<button id="gotoLogin"  value="Log In"  class="btn btn-primary center">Registrater First</button>   -->

				</form>

			</div>
		</div>
	</div>
</div>

<?php include('../common/footer.php');?>
