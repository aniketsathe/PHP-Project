<?php

$dbh=new PDO("mysql:host=localhost;dbname=Project","root","");
session_start();
if (!$_SESSION['name']) {
    header('location:index.php');
}
if(isset($_POST['submit']))
{
    print_r($_FILES['files']);
    $name=$_FILES['files']['name'];
    $type=$_FILES['files']['type'];
    $data=file_get_contents($_FILES['files']['tmp_name']);
    $f_ext=explode('.',$name);
    $f_ext=strtolower(end($f_ext));
    if($f_ext=='xlsx'){
    $stmt=$dbh->prepare("insert into Upload_Excel_File values('',?,?,?)");
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$type);
    $stmt->bindParam(3,$data);
    if ($stmt->execute()){echo "File Uploaded Successfully..";}
    else{echo "Not Upload File...";}
    }
    else{ echo "Only xlsx or XLSX files allow";}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
<h2 align="center">Welcome <?php echo $_SESSION['name']; ?></h2>
<a class="text-right" href="Logout.php"style="text-decoration: underline;margin-bottom: 20px;">Logout</a>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="files">
	<input type="submit" name="submit" value="Upload">
</form>
<ol>
    <?php
    $stmt=$dbh->prepare("select * from Upload_Excel_File");
    $stmt->execute();
    while ($row=$stmt->fetch()) {
             echo "<li><a href='view.php?Id=".$row['Id']."'>".$row['File_Name']."</a>
             <embed src='Data:".$row['File_type'].";base64,".base64_encode($row['Data'])."'width='200'/></li>";    
    }
    ?>
</ol>
</div>
</div>
</div>
</body>
</html>