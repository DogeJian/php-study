<!doctype html>
<html> 
<head> 
<meta charset="utf-8"> 
<title>帅健</title> 
</head> <!--echo '<script>alert("登陆成功！");</script>';-->
<body>
	<div id="J-div">
	<form action="" method="post" name="J-form" id="J-form">
		用户名：<input name="J-name" type="text"><br><br>
		密&nbsp;&nbsp;&nbsp;码：<input name="J-pwd" type="password"><br><br>
		<input name="J-submit" type="submit" value="登陆">
	</form>
	</div>
	<?php
	if(isset($_POST['J-name'])&&isset($_POST['J-pwd']))
	{
		$name=$_POST['J-name'];
		$pwd=$_POST['J-pwd'];
		if($name!=""||$pwd!="")
		{
			if($name=="帅健"&&$pwd=="666")
			{
				echo '<script>alert("登陆成功！");</script>';
			    echo '<script>location.href="triangle.php"</script>';
			}
			else
				echo '<script>alert("用户名或密码错误！");</script>';

		}
		else
			echo '<script>alert("用户名或密码不能为空!");</script>';
	}
	?>
</body> 
</html>