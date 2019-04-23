<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
 print("<H3>通过http协议打开文件</H3>\n");
 if(!($myFile = fopen("http://xlj/php/jiang/data.txt", "r")))
  {
   print("文件不能打开");
   exit;
  }
  while(!feof($myFile))
  {
   $myLine = fgetss($myFile, 255);
   print("$myLine <BR>\n");
  }
  fclose($myFile);
?>
</body>
</html>