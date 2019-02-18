<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'project');

$key="JKLMNtuvwxyzABCDEFGcdefghijklmnHIVWX6789";
function encryptthis($data,$key)
{
	$encryption_key=base64_decode($key);
	$iv=openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
	$encrypted=openssl_encrypt($data, 'aes-256-cbc', $encryption_key,0,$iv);
	return base64_encode($encrypted.'::'.$iv);
}

   if (isset($_POST['submit'])) {
  
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email= $_POST['email'];
    $pass= $_POST['Pass'];
	$enc=encryptthis($pass,$key);

$q="select * from register where emailid='$email'";

 $result=mysqli_query($con,$q);

 $num=mysqli_num_rows($result);

 if($num==1)
 {
 	echo "User is Already Available ";
 	header('location:Registernew.php');

 }
   elseif(mysqli_query($con,"insert into register (firstname,lastname,emailid,password) values('$fname','$lname','$email','$enc')"))
   {
   	echo "User Successfully Registered...";
   	header('location:index.php');
   }
}
?>