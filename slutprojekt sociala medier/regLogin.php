<?php
$loginNamn = $_POST["loginNamn"];
$loginLösenord = $_POST["loginLösenord"];

$db = new SQLite3('Användare.sq3');
$Användare = $db ->query("SELECT * FROM ANVÄNDARE;");
while ($row = $Användare->fetchArray(SQLITE3_ASSOC))
{
	if($row['användarnamn'] == $loginNamn && $row['lösenord'] == $loginLösenord )
	{
		header("Location: MainHTML.php");
	}
	else
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