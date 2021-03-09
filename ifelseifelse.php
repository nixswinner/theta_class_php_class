<?php

/*
averageMarks 67

based 
score   - Grade
above 70   A
60-69      B
50-59      C
40-49 	   D
below 40   Fail

*/

$averageMarkScore = 39;

echo "<h2>Marks Grade</h2>";
echo "<h3>Mark Score: $averageMarkScore</h3>";
echo "Grade: ";

if ($averageMarkScore>=70) {
	# code...
	echo "A";
}else if($averageMarkScore>=60){
	echo "B";
} else if ($averageMarkScore>=50) {
	echo "C";
	# code...
}elseif ($averageMarkScore>=40) {
	# code...
	echo "D";
}else{
	echo "Fail";
}


//E.A Country - Telephone Code
/*
	254 - Kenya
	255- Tanzania
	256 - Uganda
	250 - Rwanda
	257 - Burundi
*/
	//country = 254 - 
	//Kenya
	echo("<hr>");


	//define a country code
	$countryCode = 2050;

	echo "<h4>Country Telephone Code: $countryCode</h4>";

	if ($countryCode==254) {
		# code...
		echo "Kenya";
	}else if($countryCode==255){
		echo "Tanzania";
	}else if($countryCode==256){
		echo "Uganda";
	}else if ($countryCode==250) {
		# code...
		echo "Rwanda";
	}else if($countryCode==257){
		echo "Burundi";
	}else{
		echo "The country is not in East Africa";
	}



?>

