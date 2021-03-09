<?php

/*
Array - special variable - stores multiple values 
[memory block divided into parts which 0---value]

create an array?
//access
$planets[position]


$arrayName = array("Mercury","");

*/
$planets = array("Mercury","Venus","Earth","Mars","Jupiter","Saturn","Uranus","Neptune","Pluto");



$x =30;

echo $planets[0];
echo "<br>";
echo $planets[1];
echo "<br>";
echo $planets[2];
echo "<br>";
echo $planets[3];

echo "<h2>List of Planets</h2>";
//while 
$a = 0;
echo "<ol type='i'>";
while($a<9){
	echo "<li>";
	echo $planets[$a];
	echo "</li>";
	$a++;
}

echo "</ol>";

//Create an array to store atleast 10 counties .
//Display the above counties in a table
/*
County No.      County Name
1				Mombasa
...
...

*/
//List.. 



?>