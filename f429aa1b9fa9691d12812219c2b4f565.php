<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $colors = array("red", "green", "blue","yellow");
    print("数组的个数：".count($colors)."<br>");
    print("数组的当前值：".current($colors)."<br>");
    end($colors);
    print("数组的最后一个的值：".current($colors)."<br>");
    print("<hr>");
    $slice = each($colors);
    print("each()函数的使用："."<br>");
    print($slice[0] . "====" . $slice[1] . "<BR>");
    print($slice['key'] . "====" . $slice['value'] . "<BR>");
?>
</body>
</html>