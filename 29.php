<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
  function checkInteger($number)
  {
     if($number>1)
	 {
		 return(checkinterger($number-1));
	 }
	 elseif($number<0)
     {
		return(checkinteger(checkinteger(-1)*number-1)) ;
	 }
		else 
	{
		if(($number > 0) AND ($number < 1))
		{
		return("当然不是");
		}
	else
	{
	   return("是的");	
	}
  }
}
   print("<b>0是整数吗?</b>". checkinteger(0)."<br>\n");
    print("<B>7是整数吗？</B> " . checkinteger(7)."<br>\n");
	print("<B>3.5呢？</B>" . checkInteger(3.5) . "<BR>\n");
    print("<B>那么-5呢？</B>" . checkInteger(-5) . "<BR>\n");
    print("<B>还有-9.2？</B>" . checkInteger(-9.2) . "<BR>\n");
   
   
?>
</body>
</html>