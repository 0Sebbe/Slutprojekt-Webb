<?php
$tempNamn = $_POST["namn"]; #Sparar användarnamn
$tempLösenord = $_POST["lösenord"]; #Sparar lösenord
$tempLösenord2 = $_POST["lösenord2"]; #Sparar lösen ord igen för att se så att det checkar

$db = new SQLite3('Användare.sq3'); #Skapar eller öppnar en databas som kallas Användare

if($tempLösenord == $tempLösenord2 && strlen($tempLösenord) >= 5)
{
	$db->exec("CREATE TABLE IF NOT EXISTS ANVÄNDARE(användarnamn text unique, lösenord text)");  #Skapa ett table i databasen ifall det inte finns
	$db->exec("INSERT INTO ANVÄNDARE VALUES('".$tempNamn."',".$tempLösenord.")");  #Lägger in de sparade värdena i table:et  
	
	header("Location: LogInHTML.php");
}
else
{
	header("Location: RegisterHTML.php");
}


?>