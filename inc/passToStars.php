<?php
function passToStars($password) {

	$password = strlen($password); //lenght of password
	$number = 0;
	
	$stars = ""; //empty string
	while ($number != $password) //While an number isn't the lenght of the password..
	{
		$stars = $stars."*"; //.. PHP will add an star to the empty string.
		$number = $number+1; //If we don't excecute this, the page $stars will be unlimited.
	}
	return $stars;
}
?>