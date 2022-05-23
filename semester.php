<?php
$cookie_name="user";
$cookie_value="microsoft";
setcookie($cookie_name,$cookie_value,time()+(86400),"/");
echo"cookie is set";
?>
<html>
<body>
<?php	
if(!isset($_COOKIE["cookie_name"]))
{
	echo "cookie is not set";
}
else{
	echo $_COOKIE[$cookie_name]
}
?>
</body>
</html>

