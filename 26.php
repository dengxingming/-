<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
  function printbold( $inputtext)
  {
	  print("<b>". $inputtext . "</b>");
	  }
  print("这行没有加重！<br>\n");
  printbold("这有加重了<br>!!!!");
  print("<br>\n");
  print("这行没有加重! <br>\n");
  ?>
  
</body>
</html>