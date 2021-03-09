<?php

/*
variable holds information
data pies

name variables -
1.Declaring a varible - name _ variable 
   - $ variable_name
2.Assign variable = value 

- data variable 
-Numeric -  numbers  10 .0.883838
- non numeric - strings  "John Doe"

*/

$age=20;//have variable - name age - hold 

$name = "John";
$_test = 45;
$test2= 78;

$firstName = "Peter";
$secondName = "Jane";
$space=" ";

//concatentation - combine non numeric .
$fullname = $firstName.$space.$secondName; //PeterJane  Peter Jane

echo $fullname;

echo "<br>";

echo $name;

echo "<br>";
echo "$_test";
echo "<br>";

$yob = 1992;
$studentName = "Jane Hillary";

echo "My name is <b>$studentName</b> and was born in the year ".$yob;

?>