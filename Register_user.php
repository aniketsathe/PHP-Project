<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="javascript" type="text/javascript" href="register.js">
	<title>Registration Form</title>
	<script type="text/javascript">
		



<body>
<div class="container">
	<div class="row " style="align:center;">
		<div class="col-lg-12">
<!--Registration form!-->

<div class="col-lg-6">
<form onsubmit="return check();" action="Login." method="post">
	
	<h2>Registration Form</h2>
	<div class="form-group">
		<label>Firstname</label>
		<input id="fname" type="text" name="fname" class="form-control" placeholder="Enter Firstname"required="Enter Firstname">
	</div>
	<div class="form-group">
		<label>Lastname</label>
		<input id="lname" type="text" name="lname" class="form-control"required="Enter Lastname" placeholder="Enter Lastname">
	</div>
	<div class="form-group">
		<label>EmailID</label>
		<input id="email" type="text" name="email" class="form-control" required="Enter EmailID" placeholder="Enter EmailID">
	</div>
<div class="form-group">
		<label>Password</label>
		<input id="Password1" type="Password" name="" class="form-control" required="Enter Password" placeholder="Enter Password">
	</div>
	<div class="form-group">
		<label>Confirm Password</label>
		<input id="Password2" type="Password" name="Pass" class="form-control" onclick="return validate();" required="Enter Confirm Password" placeholder="Enter Confirm Password">
	</div>
	
	<button class="btn btn-primary" name="submit" style="margin-right: 15px;">Submit</button> 
	Already Registered<a href="Login.php" style="margin-left: 15px;text-decoration: underline;">Click Here</a>
	
	
<!--Registration form!-->

</form>
</div>

</div>
</div>
</body>
</html>