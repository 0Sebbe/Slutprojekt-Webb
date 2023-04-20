<?php
$loginNamn = $_POST["loginNamn"];
$loginLösenord = $_POST["loginLösenord"];

$db = new SQLite3('Användare.sq3');

if($db->exec("SELECT * FROM ANVÄNDARE WHERE användarnamn LIKE $loginNamn") && $db->exec("SELECT * FROM ANVÄNDARE WHERE användarnamn LIKE $loginNamn"))
{
	header("Location: MainHTML.php");
}
else
{
	header("Location: LogInHTML.php");
}

?>