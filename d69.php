<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $URL = "http://www.microsoft.com/";
    print("<HTML>");
    print("<HEAD>");
    print("<TITLE>取得页面的链接</TITLE>");
    print("</HEAD>");
    print("<BODY>");
    $page = fopen($URL, "r");
    print("链接 $URL<BR>");
    print("<UL>");
    while(!feof($page))
    {
        $line = fgets($page, 255);
        while(ereg("HREF=\"[^\"]*\"", $line, $match))
        {
            print("<Li>");
            print($match[0]);
            print("<BR>");
        }
    }
    print("</UL>");
    fclose($page);
    print("</BODY>");
    print("</HTML>");
?>
</body>
</html>