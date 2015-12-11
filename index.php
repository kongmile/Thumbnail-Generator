<!DOCTYPE html>
<html>
<head>
	
	<title>缩略图生成</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="thumb.css">
</head>
<body>
	<h1>缩略图生成器</h1>
	<form action="identify.php" method="post" enctype="multipart/form-data" >
		<input type="file" name="pic"  accept="image/jpeg,image/gif,image/png" />
		<img src="captcha.php">
		<input type="text" name="captcha" id="cap"/>
		<input type="submit" value="上传" class="btn"/>
	</form>
    
</body>
</html>