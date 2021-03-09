<?php 

//switch

//you value n

/*
value - match again possibilies
if they match - 

*/

/*
country code
//E.A Country - Telephone Code
/*
	254 - Kenya
	255- Tanzania
	256 - Uganda
	250 - Rwanda
	257 - Burundi
	//its not east Africa

*/
	$countryPhoneCode=254;

	switch($countryPhoneCode){

		case 254 : //258 ==254 ?
			echo "Kenya";
		break;

		case 255: //258 ==255 ?
		echo "Tanzania";
		break;

		case 256:
		echo "Uganda";
		break;

		default:
		echo "Not in East Africa";
		break;
	}

	echo "<br>Rest of the code";

	/*
		Countries
		Given a country Name display its capital city
		Use switch
		Kenya - Nairobi
		Uganda - Kampala
		Tanzania - Dodoma
		South Sudan - Juba
		Rwanda - Kigali
		Burundi - Bujumbura

		- I dont have that country

	*/
		echo "<hr>";

		$countryName = "Somali Land";
		switch($countryName){
			case "Kenya":
			echo "Capital City of $countryName is Nairobi";
			break;

			case "Tanzania":
			echo "Capital City of $countryName is Dodoma";
			break;

			case "South Sudan":
			echo "Capital City of $countryName is Juba";
			break;

			case "Rwanda":
			echo "Capital City of $countryName is Kigali";
			break;

			case "Burundi":
			echo "Capital City of $countryName is Bujumbura";
			break;

			default:
			echo "I dont have the capital city of the Country $countryName";
			break;
		}

?>