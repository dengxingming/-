<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $aspell_link=aspell_new("english");
    if (aspell_check($aspell_link,"testt"))
        {
            echo "testt:正确的拼写";
        } 
    else    
        {
            echo "testt :是一个错误的拼写";
            print("<hr>");
        }
    if (aspell_check($aspell_link,"test"))
        {
            echo "test :是一个正确的拼写";
        } 
    else    
        {
            echo "test:是一个错误的拼写";
        }
?>

</body>
</html>