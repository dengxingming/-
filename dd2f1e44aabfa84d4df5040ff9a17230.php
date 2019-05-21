<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    print(abs(-13));
?>
<?php
    print("<TABLE BORDER=\"1\">");
    print("<TR><TH>x</TH><TH>acos(x)</TH></TR>");
    for($index = -1; $index <= 1; $index += 0.25)
    {
        print("<TR>");
        print("<TD>$index</TD>");
        print("<TD>" . acos($index) . "</TD>");
        print("</TR>");
    }
    print("</TABLE>");
?>
<?php
    print("<TABLE BORDER=\"1\">");
    print("<TR><TH>x</TH><TH>asin(x)</TH></TR>");
    for($index = -1; $index <= 1; $index += 0.25)
    {
        print("<TR>");
        print("<TD>$index</TD>");
        print("<TD>" . asin($index) . "</TD>");
        print("</TR>");
    }
    print("</TABLE>");
?>
</body>
</html>