<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'project');

$key="JKLMNtuvwxyzABCDEFGcdefghijklmnHIVWX6789";

 function decryptthis($data,$key)
{
	$encryption_key=base64_decode($key);
    list($encrypted_data,$iv)=array_pad(explode('::',base64_decode($data),2),2,null);
    return openssl_decrypt($encrypted_data,'aes-256-cbc',$encryption_key,0,$iv);	
}

if(isset($_POST['Login'])){
$email= $_POST['email'];
$pass=$_POST['Pass'];

$qy="select * from register where emailid='$email' && password='$pass'";

$result=mysqli_query($con,$qy);

while($row = mysqli_fetch_row($result)) {
	 $email=$row['emailid'];
      $pass= decryptthis($row['password'],$key);
$q="select * from register where emailid='$email' && password='$pass'";


 $result=mysqli_query($con,$q);

 $num=mysqli_num_rows($result);


 if($num == 1)
 {
   $_SESSION['name']=$email;
   echo '<alert> Login Successful </alert>';
 	header('location:Filedata.php');

 }
   else
   {
   	echo '<alert>Incorrect Login</alert>';
   	header('location:index.php');
   }
}}
?>