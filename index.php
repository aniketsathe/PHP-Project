<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    
    </head>
<body>
<div class="container">
	<div class="row">
		<!-- LOGIN FORM-->
<div class="col-lg-6">
	
<h2>Login Form</h2>
<form action="validation.php" method="post" >
	<div class="form-group">
	<label>EmailID</label>
	<input type="text" name="email" class="form-control" placeholder="Enter Email ID" required="Enter EmailID">
</div>
<div class="form-group">
	<label>Password</label>
	<input type="Password" name="Pass" class="form-control" placeholder="Enter Password" required="Enter Password">
</div>
<button type="submit" class="btn btn-primary" name="Login">Login</button>
<a href="forgotpassword.php" name="forgotpassword" style="margin-left: 50px;margin-right: 15px;">Forgot Password</a>
New User <a href="Registernew.php" style="text-decoration: underline;">Click Here</a>
</form>

<!--END OF LOGIN FORM-->
</div>
</div>
</div>    
</body>
</html>
