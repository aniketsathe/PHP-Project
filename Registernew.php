<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/javascript"></style>
	<title>Register User</title>


<script type="text/javascript">
function validate()
{

 if(document.form1.fname.value=="")
  {
    alert("Plese Enter firstname");
	document.form1.fname.focus();
	return false;

  }

if(document.form1.lname.value=="")
  {
    alert("Plese Enter Lastname");
  document.form1.lname.focus();
  return false;

  }

  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
  document.form1.email.focus();
  return false;
  }
  e=document.form1.email.value;
    f1=e.indexOf('@');
    f2=e.indexOf('@',f1+1);
    e1=e.indexOf('.');
    e2=e.indexOf('.',e1+1);
    n=e.length;

    if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
    {
      alert("Please Enter valid Email");
      document.form1.email.focus();
      return false;
    } 
 
 if(document.form1.Password1.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.Password1.focus();
	return false;
  } 
  if(document.form1.Password2.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.Password2.focus();
	return false;
  }
  if(document.form1.Password1.value!=document.form1.Password2.value)
  {
    alert("Confirm Password does not matched");
	document.form1.Password2.focus();
	return false;
  }
  return true;
}
	</script>


</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<form onsubmit="return validate();" action="Register.php" method="post" id="form1">
	
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
		<input id="Password2" type="Password" name="Pass" class="form-control" required="Enter Confirm Password" placeholder="Enter Confirm Password">
	</div>
	
	<button class="btn btn-primary" id="submit" name="submit" style="margin-right: 15px;">Submit</button> 
	Already Registered<a href="Login.php" style="margin-left: 15px;text-decoration: underline;">Click Here</a>
	
	</form>
		</div>
	</div>
</div>
</body>
</html>