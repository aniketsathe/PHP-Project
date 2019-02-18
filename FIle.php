<?php
if (isset($_post['submit'])) {
	print_r($_FILE['files']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>FIle Upload</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="files">
	<input type="submit" name="submit" value="Upload">
</form>
</body>
</html>