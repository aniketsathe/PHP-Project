<?php
$dbh=new PDO("mysql:host=localhost;dbname=Project","root","");
$id=isset($_GET['Id'])?$_GET['Id'] : "";
$stmt=$dbh->prepare("select * from Upload_Excel_File");
    $stmt->bindParam(1,$id);
    $stmt->execute();
    $row=$stmt->fetch();
    header('content-type:'.$row['File_type']);
    echo $row['Data'];    


?>