<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>	
<?php	
 print("data.txt文件是否存在？"."<br>");
   if(file_exists("data.txt"))
   {
	   print("这个文件存在");
	   print(flieinode("data.txt);
   }
   else
    {
	  print("文件不存在");
	
	}
?>
</body>
</html>