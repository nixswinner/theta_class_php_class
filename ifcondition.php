<?php

$age=83;
$elderAgeMin = 70;

if($age>=$elderAgeMin)//condition 73>=70 - true
{

//when condition is true - execute {} - execute
	echo "<h2>Hey!Welcome to elders club!</h2>";
	echo "<br>";

}


echo "You are $age years old";

echo "<br>The rest of the code";


//
$money = 6300;
$minimumAmount = 2000;
//300>=2000 - false
if ($money>=$minimumAmount) {
	echo "<h2>Items Available</h2>";
	echo "<ul>";
		echo "<li>Gaming Mouse - Ksh2200</li>";
		echo "<li>Pair of HeadPhones Ksh 2000</li>";
	echo "</ul>";

}else{
	echo("<h2>Insufficient Amount to purchase our Items.Kindly top up</h2>");
}

//

?>