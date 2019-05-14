<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
function list_array ($array)
    {
       while (list ($key, $value)=each ($array)) 
       {
       $str= "<b>$key:</b> $value<br>";
       }
       return $str;
    }
 echo "$HTTP_USER_AGENT<hr>";
 $browser = get_browser();
 print("<br>");
 echo list_array ((array) $browser);
?>

</body>
</html>