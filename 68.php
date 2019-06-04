<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    print("<HTML>");
    print("<HEAD>");
    print("<TITLE>转换所有的标记为PHP</TITLE>");
    print("</HEAD>");
    $Hour = date("H");
    $Intensity = round(($Hour/24.0)*(0xFF));
    $PageColor = dechex($Intensity) . dechex($Intensity) .  dechex($Intensity);
    print("<BODY BGCOLOR=\"#$PageColor\">");
    print("<H1>转换所有的标记为PHP</H1>");
    print("</BODY>");
    print("</HTML>");
?>

</body>
</html>