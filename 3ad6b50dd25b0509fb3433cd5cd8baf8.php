v<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $text = "My dog's name is Angus.";
    print(substr($text, 17, 5)."<hr>");
?>
<?php
    $line = "leon\tatkinson\tleon@clearink.com";
    for($token = strtok($line, "\t");
        $token != "";
        $token = strtok("\t"))
    {
        print("token: $token<BR>");
    }
?>
<?php
    $text = "Although this is string, it's not very long.";
    print("<hr>".strstr($text, ",")); 
?>

</body>
</html>