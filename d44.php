<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
 $myfile=file("data.txt");
 for($index=0;$index<count($myfile);$index;
  {
	 print($myfile[$index]."<br>");
  }
?>
 
</body>
</html>