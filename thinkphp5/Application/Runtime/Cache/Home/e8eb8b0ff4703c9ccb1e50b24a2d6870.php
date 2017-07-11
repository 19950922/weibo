<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>
	<form action="<?php echo U('Center/images');?>" method= "post" enctype ="multipart/form-data">
	    <input type="file" name="img[]" multiple='multiple'>
	    <input type="submit" value="Upload">
	</form>
</center> 
</body>
</html>