<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
	//缩略图尺寸
	$size = array('height' => 100 , 'weight' => 200 );  
	
	//载入图片
	$src = "$_SESSION['filename']";
	$info = getimagesize($src);
	print_r($info);
	$type = image_type_to_extension($info[2], false);
	$load = "imagecreatefrom{$type}";
	$srcimage = $load($src);
	var_dump($src);

	//制作缩略图
	$nail = imagecreatetruecolor($size['weight'], $size['height']);
	imagecopyresampled($nail, $srcimage, 0, 0, 0, 0, $size['weight'], $size['height'], $info[0], $info[1] );
	imagedestroy($srcimage);

	//输出缩略图
	ob_clean();
	header("Content-type:".$info['mime']);
	$output = "image{$type}";
	$output($nail);
	imagedestroy($nail);


