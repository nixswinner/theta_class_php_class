<?php

/*
-mpesa flow 
money transfer
- initial 
balance 
amount to send 
confirm


*/

$balance = 5000;
$amountToSend = 1000;

$pinSet = 7890;

$pinEntered = 7890;


echo "<h2>Money transfer flow.</h2>";
echo "Balance: $balance<br>";
echo "Amount to send: $amountToSend";

//check if the amount to send less or equal balance

if ($amountToSend<=$balance) {//true
	# code...
	echo "<br>Enough amount to Send Money";

	//check for the pin verification

	if ($pinEntered==$pinSet) {
		# code...
			# code...
		echo "<h3 style='color:green'>Sending Ksh $amountToSend ...</h3>";
	}else{
		echo "<h3 style='color:red;'>Invalid Pin!</h3>";
	}

}else{
	//in situation - false
	echo "<br>Oop!You have insufficient balance to complete send of $amountToSend";
}
//Check pin entered is it correct or no
//if correct . sending ksh 3000 ....

//if incorrect 
//invalid pin - in red color

/*if ($pinEntered===$pinSet) {
	# code...
	echo "<h3 style='color:green'>Sending Ksh $amountToSend ...</h3>";
}else{
	echo "<h3 style='color:red;'>Invalid Pin!</h3>";
}*/



//ATM
//Perform a withdrawal - 
//
//1.Check pin valid
//check for balance and amount 
//- you can only withdraw less or equal to balance



?>