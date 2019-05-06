<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
    if($myFile=fopen("data.txt", "r"))
    {
    while(!feof($myFile))
    {
        $myCharacter=fgetc($myFile);
        print($myCharacter);
    }
    fclose($myFile);
    }   
?>
<? print("<hr>");?>
<?
    
    if($myFile = fopen("data.txt", "r"))
    {
        while(!feof($myFile))
        {
            $myLine = fgets($myFile, 255);
            print($myLine);
        }
    fclose($myFile);
    }   
?>
<? print("<hr>");?>
<?
    if($myFile=fopen("data.txt", "r"))
    {
        while(!feof($myFile))
        {
            $myLine = fgetss($myFile, 255);
            print($myLine);
        }
        fclose($myFile);
    }   
?>
</body>
</html>