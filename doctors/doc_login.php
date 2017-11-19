<?php include('../common/header.php');?>
<div class="doclogin">
<?php

if(isset($_POST['submit']) && ($_POST['submit'] == "Submit")      ) 
{

	echo "acutal submit";
}

if(isset($_POST['submit']) && ($_POST['submit'] == "submit")      ) 
{

 $scon=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($scon,'test') or die(mysqli_error());
 $doc_id=$_POST['doc_id'];
 $doc_pass=$_POST['doc_pass'];



 if($doc_id!=''&&$doc_pass!='')
 {
	
   $query=mysqli_query($scon,"select * from doc_reg where doc_id='".$doc_id."' and doc_pass='".$doc_pass."'") ;
   $res=mysqli_fetch_row($query);
   if($res)
   {
	session_start();
   $_SESSION['doc_id']=$doc_id;
   $_SESSION['user_type']="d";
   
	//header('location:index.php');
	$_SESSION['login'] = "1";
	
	header('Location: ./doc_login1.php');
	
   }
   else
   {
	echo'You entered username or password is incorrect';
	header('Location: ./doc_login.php');
   }
 }
 else
 {
  echo'Enter both username and password';
  header('Location: ./doc_login.php');
 }
}
else if(isset($_POST['register']) && ($_POST['register'] == "register")  ){
	header('Location: ./doc_reg.php');
} 
?>



<div class="row">

    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary"> 
			<div class="panel-heading">Enter Your Details Here</div>
			<div class="panel-body">
				<form name="myform"  method="post">
					<div class="form-group">
						<label for="doc_id">Doc-Id*</label>
						<input id="doc_id" name="doc_id" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="doc_pass">Password *</label>
						<input id="doc_pass" name="doc_pass" class="form-control" type="password" data-validation="email">
						<span id="error_user_pass" class="text-danger"></span>
					</div>
                    <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
                    <a class="btn btn-primary center" href="../doctors/doc_reg.php">Register First</a>   
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('../common/footer.php');?>