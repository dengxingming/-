<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
00<?
 print("<b>距离星期一还有几天？</b>\n");
 print("<ol>\n");
 for($currentdate=date("U");
 date("1",$currentdate)!="monday";
 $currentdate +=(60*60*24));
 
 {
   print("<li>" . date("l",currentdate));
 }
 print("</ol>\n");
?>
</body>
</html>