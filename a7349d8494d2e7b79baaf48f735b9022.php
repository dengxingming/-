<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $data = "VGhpcyBpcyBhIAptdWx0aS1saW5lIG1lc3NhZ2UK";
    print ($data);
    print(base64_decode($data));
?>
<?php
    print("<hr>");
    $text = "这是一个多行信息";
    print ($text);
    print(base64_encode($text)); 
?>
</body>
</html>