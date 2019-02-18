
<?php
mysql_connect("localhost","root","");
mysql_select_db("Project");
$email=$_POST["email"];
$query=mysql_query("select * from register where emailid='$email'");
$row=mysql_fetch_array($query);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "satheaniket1@gmail.com";
  $mail->Password = "Aniketars#9";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "satheaniket1@gmail.com";
  $mail->FromName = "Aniket Sathe";
  
  $mail->addAddress($row["emailid"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "Forgot Password Mail";
  $mail->Body = "<i>This is Your Password: </i>".$row["password"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
   header('location:forgotpassword.php');
  }
  else
  {
   echo "Message has been sent successfully";
   header('location:index.php');
  }