<?php

/*
do while 

- excute 

do {
	//body
}//condition
while(condition);

*/

//display 1 to while

echo "<h2>Count 1 to 5 using a Do while</h2>";
$x = 1;

do{
	//body - show 
	echo "$x <br>";
	$x++;
}while($x<=5);


//using a while loop 
//count from 10 down to 0
/*
10
9
...
0

*/
echo "Count from 10 down to 1<br>";
$y=10;

do{
	echo "$y <br>";
	$y--;
	if ($y==4) {
		# code...
		break;
	}
}while($y>0);

///pin - youve 3 trials 
//
$correctpin=1234;
$trials = 2;
$pinInput=18234;
do{
	
	echo "
    <form>
    Enter Pin: <input type='password' 
    placeholder='enter password'/>
    </form>
	";
	if ($pinInput==$correctpin) {
		# code...
		$trials=0;
		echo "<br>Welcome.!";
	}else{
		echo "<br>Invalid pin.Try again";
		$trials--;
	}

}while($trials>0);


?>