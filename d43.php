<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	print("文件的所有者（UID 值）：");
    print(filetype("data.txt").:"<br>")
    print("文件的大小：");
    print(filesize("data.txt")."<br>");
	print("文件的类型：");
	print(filetype("data.txt")."<br>");
</body>
</html>