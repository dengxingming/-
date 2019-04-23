<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
 print("<HTML>");
 print("<HEAD>");
 print("<TITLE>改变背景颜色</TITLE>\n");
 print("</HEAD>");
 if($inputColor == "")
 {
  $inputColor = "FFFFFF";	 
 }
 print("<BODY BGCOLOR=\"#$inputColor\">);
 print("<FORM ACTION="\37.php\" METHOD=\"post\">");
 print("<B>请填写HTML颜色代码:</B> ");
 print("<INPUT >");
 print("TYPE=\"text\"");
 print("NAME=\"inputColor\"");
 print("VALUE=\"$inputColor\">");
 print("<INPUT> ");
 print("TYPE=\"submit\"");
 print("NAME=\"Submit_Button\"");
 print("VALUE=\"提交颜色\">");
 print("</FORM>");
 print("</BODY>");
 print("</HTML>");
?>
</body>
</html>