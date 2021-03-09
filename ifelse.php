
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>

</body>
</html>
<?php

$myspeed = 90;
$speedLimit=80;


if ($myspeed>$speedLimit) {
	# code...
	echo "<h1 style='color:red'>";
	echo "Overspeeding!You will be fined &#129301";
	echo "</h1>";
}else{
	echo "<h1 style='color:green;'>Good!Keep Respecting the Law. &#128512</h1>";
}

?>