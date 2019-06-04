<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    function calculate($period)
    {
        return(cos(time()%$period));
    }
    $start = time();

    for($index = 0; $index < 2000; $index++)
    {
        $value += calculate(360);
    }
    $finish = time();
    print("这次循环使用的时间为：" . "<br>".($finish - $start) . " seconds<BR>");
    print ("<hr>");
    print ("value的值为：".$value);
?>
</body>
</html>