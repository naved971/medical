<?php include('../common/header.php');?>

<div class="container isotope-wrapper text-center">
 
<div class="row">

    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary"> 
			<div class="panel-heading">Enter Your Details Here
			</div>
			<div class="panel-body">
				<form name="myform"  method="post">
					<div class="form-group">
						<label for="myName">User Id*</label>
						<input id="myName" name="userid" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Password *</label>
						<input id="lastname" name="password" class="form-control" type="password" data-validation="email">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="username">User Name *</label>
						<input id="username" name="username" class="form-control" type="text" >
						<span id="error_age" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="dob">Date Of Birth *</label>
						<input type="date" name="dob" id="dob" class="form-control">
						<span id="error_dob" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="gender">Gender</label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="phone">Phone Number *</label>
						<input type="text" id="phone" name="phone" class="form-control" >
						<span id="error_phone" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="disc">Discription</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>					
					<button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
					<button id="gotoLogin"  value="Log In"  class="btn btn-primary center">Log in</button>

				</form>

			</div>
		</div>
	</div>
</div>

</div>
</div>
<?php include('../common/footer.php');?>