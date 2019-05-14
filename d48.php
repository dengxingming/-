<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    print("<TABLE BORDER=\"1\">");
    print("<TR><font color='red'>");
    print("<TH>文件名</TH>");
    print("<TH>文件的大小</TH>");
    print("</font></TR>\n");
    $myDirectory = opendir(".");
    while($entryName = readdir($myDirectory))
    {
        print("<TR>");
        print("<TD>$entryName</TD>");
        print("<TD ALIGN=\"right\">");
        print(filesize($entryName));
        print("</TD>");
        print("</TR>");
    }
    closedir($myDirectory);
    print("</TABLE>");
?>
</body>
</html>