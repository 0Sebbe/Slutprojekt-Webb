<?php
$loginNamn = $_POST["loginNamn"];
$loginLösenord = $_POST["loginLösenord"];

$db = new SQLite3('Användare.sq3'); #Skapar eller kallar databas med tabellen Användare
$Användare = $db ->query("SELECT * FROM ANVÄNDARE;");
while ($row = $Användare->fetchArray(SQLITE3_ASSOC))
{
	if($row['användarnamn'] == $loginNamn && $row['lösenord'] == $loginLösenord ) #Ifall användarnamnet och lösenordet man skriver in matchar ett konto i tabellen användare loggas man in
	{
		setcookie("användare", $loginNamn, time()+60*60*24*30, '/');
		header("Location: MainHTML.php");
	}
	else #Annars om användarnamn eller lösenord inte matchar med ett konto i tabellen skickas ett felmeddelande och man kommer tillbaka till logga in sidan
	{
		echo "Fel användarnamn eller lösenord";
		?>
		<html>
			<form action = "LogInHTML.php" method="GET"
			<BR> Till logga in <input type="submit">
			</form>
		</html>
		<?php
	}
}


?>