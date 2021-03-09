<?php

//I want to show / count numbers from 0 to 10
/*
0  0
1  0+1
2  1+1
3  2+1
4
5
6
...
10

*/

echo "Count 0 to 10<br>";
$x = 0;
echo "$x <br>";

$x++; //$x=$x+1;//1
echo "$x <br>";

$x++;
echo "$x <br>";

$x++;
echo "$x <br>";

$x++;
echo "$x <br>";

//loops ? - to achieve
/// - while,foreach.for ,do while
//
/*
while(condition){
	
}

*/

echo "Using loop to count 0 to 10<br>";

$y = 0;

while($y<=10){
	echo "$y <br>";
	$y++;//
}


/*
Write a program that is going to count from 0 to 20

0,2,4,6,8,10.12,14,16,18,20
//

*/

echo "<hr>Count from 0 to 20 Skipping one value<br>";
$z=0;

while ($z<=20) {
	# code...
	echo "$z <br>";

	$z+=2;
}

//Write a program print numbers 0 to 10
//every number - mark odd or even
//even divisible 2 - remainder - 0
//odd divide /2 - r

//% modulus 
echo "<h2>Odd and Even numbers </h2>";
$a = 0;
while ($a <= 10) {

	if($a%2==0){
		//even number
		echo "$a --<b>Even</b><br>";
	}else{
		//odd number
		echo "$a --<b>Odd</b><br>";
	}
	# code...
	
	$a++;//

}

//Display only odd numbers between 0 - 50
$c=0;
while ( $c<= 50) {
	# code...
	if ($c%2 !=0) {//odd
		# code...
		echo "$c <br>";
	}
	$c++;
}

//Show all prime numbers between 0-50



?>