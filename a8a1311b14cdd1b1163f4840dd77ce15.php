<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $first = "abc";
    $second = "aBc";
    if(strcmp($first, $second) == 0)
    {
        print("字符串相等:"."<hr>");
    }
    else
    {
        print("字符串不相等"."<hr>");
    }
?>
<?php
    print("a short string ".strlen("a short string")."<hr>");
?>
<?php
    $text = "hello world";
    print(strpos($text, "w")."<hr>");
?>

</body>
</html>