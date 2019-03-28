<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>帅健</title>
</head>

<body>
	<form method="post" name="J-form">
	输入三角形的三条边：<input type="text" name="J-input1">&nbsp;&nbsp;<input type="text" name="J-input2">&nbsp;&nbsp;<input type="text" name="J-input3">
	<input type="submit" value="查看三角形">
	</form>
<?php
	if(isset($_POST['J-input1'])&&isset($_POST['J-input2'])&&isset($_POST['J-input3']))
	{
		if($_POST['J-input1']!=""&&$_POST['J-input1']!=""&&$_POST['J-input1']!="")
		{
			area($_POST['J-input1'],$_POST['J-input2'],$_POST['J-input3']);
		}
		else
			echo "三角形三边不能为空";
	}
 function area($a,$b,$c){
     $l=null;$s=null;$area=null;
        echo"三角形的三边为$a $b $c<br>";
     if($a+$b>$c&&$a+$c>$b&&$b+$c>$a)
     {
	    $s=($a+$b+$c)/2;
	    $l=$a+$b+$c;
	    $area=sqrt($s*($s-$a)*($s-$b)*($s-$c));
	    echo"三角形面积为$area<br>";
	    echo"周长为$l<br>";
           if($a==$b&&$a==$c)
               echo"三角形是等边三角形<br><br>";
           else if($a==$b||$a==$c||$b==$c)
               echo"三角形是等腰三角形<br><br>";
           else if(($a*$a+$b*$b==$c*$c)||($a*$a+$c*$c==$b*$b)||($b*$b+$c*$c==$a*$a))
               echo"三角形是直角三角形<br><br>";
           else
               echo"三角形是普通三角形<br><br>";
	 }
	else
	   echo"非三角形<br>";
}

?>
</body>
</html>