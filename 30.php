<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
  function Counter(){
	  $five+="00000";
	  $four="0000";
	  $three="000";
	  $two="00";
	  $one="0";
	  $counter="counternumber.dat";
	  if(!file_exists($counter))
	  {
	  $counter=fopen($counter,"w");
	  fputs($counter,"0");
	  fclose($counter);
	  }
	  else
	  {
	  $num=file($counter,"r");
	  $num[0]+=1;
	  if($num[0]<10){
	    print "five"."$num[0]";
	  }elseif($num[0]<100){
	     print "four"."$num[0]";
	  }elseif($num[0]<1000){
		print "three"."$num[0]";
	  }elseif($num[0]<10000){
		print "two"."$num[0]";
	  }elseif($num[0]<100000){
		print "one"."$num[0]";
	  }else{
	    print"$num[0]";
	  }}
	  $fp=fopen($counter,"w");
	  fputs($fp,"$num[0]" );
	  fclose($fp);
  }
?>
<!-- 可以用<?php Counter()?>形式调用函数，并用html标记或 
CSS样式单来修饰显示出的数字,如下所示 --> 
<U> 
<B> 
<FONT SIZE="9" face="verdana" COLOR="#ffcc00"> 
<?php Counter()?> 
</FONT> 
</B> 
</U> 
</body>
</html>