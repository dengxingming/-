<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    print("abcdefg  颠倒  ");
    print(strrev("abcdefg")."<hr>");
    print("小写: ".strtolower("Hello World")."<hr>");
    print("大写: ".strtoupper("Hello World")."<hr>");
    $text = "     whitespace      ";
    print("\"" . trim($text) . "\"");
?>

</body>
</html>