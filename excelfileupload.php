<?php
include_once('Upload_Excel.php');
session_start();

if(isset($_POST['submit']) && !empty($_FILES["file"]["name"]))
{

    $f_name=$_FILES['myfile']['name'];
    $f_tmp=$_FILES['myfile']['tmp_name'];
    $f_size=$_FILES['myfile']['size'];
    $f_extension=explode('.',$f_name);
    $f_extension=strtolower(end($f_extension));
    $f_newfile=uniqid().'.'.$f_extension;
    $store="Excel_Files/".$f_newfile;
    if($f_extension=='xlsx')
    {
        if(move_uploaded_file($f_tmp,$store))
        {
            
            $insert=$db->prepare("insert into Upload_Excel_File values('',?,?,?)");
            $insert->bindParam(1,$f_name);
            $insert->bindParam(2,$f_newfile);
            $insert->bindParam(3,$f_tmp);
            $insert->execute();
            
        }
    }
    else{echo "Please Upload Only .xlsx File...";}
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>File Handle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center" style="margin-top:200px;">
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Upload" name="submit">
    </form>
</div>
</div>
</div>
</body>
</html>