<?php

/*
Write a php program that is going to do 
Math ops on 4 numbers
- SUM
- Multiplication
- Difference

-Average = 


- x,y,z,a*/

$x=20;
$y = 40;
$z = 67;
$a = 88;


$sum = $x+$y+$z+$a;
$difference = $x-$y-$z-$a;
$Multiplication = $x*$y*$z*$a;

$power = 2**3;// 2^2

$Average = $sum/4;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Number Manipulation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>

<div class="card">
	<div class="card-text">
		<?php echo "Data being manipulated: <b>$x,$y,$z,$a</b>"; ?>
	</div>
</div>

	<table class="table">
		<tr>
			<th>Operation</th>
			<th>Result</th>
		</tr>

		<tr>
			<td>
				Sum
			</td>
			<td>
				<?php echo($sum) ?>
			</td>
		</tr>

		<tr>
			<td>
				Difference
			</td>
			<td>
				<?php echo($difference) ?>
			</td>
		</tr>

		<tr>
			<td>
				Multiplication
			</td>
			<td>
				<?php echo($Multiplication) ?>
			</td>
		</tr>

		<tr>
			<td>
				Average
			</td>
			<td>
				<?php echo($Average) ?>
			</td>
		</tr>

		<tr>
			<td>
				Exponential
			</td>
			<td>
				<?php echo($power) ?>
			</td>
		</tr>
		
	</table>

</body>
</html>