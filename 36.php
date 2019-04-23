<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
 print("<TABLE bgcolor='ffccoo' BORDER=1>");
  for($Row=1; $Row <= 12; $Row ++)
{ 
  print("<TR>");  
  for($Column=1;$Column<=12;$column ++)
  {
	print("<TD>");  
	print($Row*$Column); 
	print("</TD>"); 
  }
  print("</TR>");
}
 print("<TABLE>");
?>
</body>
</html>