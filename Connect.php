<?php
$con=mysqli_connect('localhost','root','') or die("Please Connect to DB");
$db=mysqli_select_db($con,'Project');
if($con)
{echo "Succesful.";}
?>