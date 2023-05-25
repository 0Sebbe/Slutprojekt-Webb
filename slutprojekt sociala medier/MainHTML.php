<?php
#OBS FUNKAR INTE JUST NU
if(isset($_COOKIE["checkLogin"])) #Tittar ifall användaren är inloggad
{

}
else
{
header("Location:LogInHTML.php");
}

?>

<html>
<body bgcolor="FFB6C1">
<head><title>Kee-Wee</title></head>
<h1 style="color:white; text-shadow: 2px 1px black;">Kee-Wee!</h1>

<?php $Användarnamn = $_COOKIE["användare"]; echo "Du är inloggad som ".$_COOKIE["användare"]; ?>
<form action="regChatboard.php" method="POST">
<input type="text" name="inlägg" style= "width: 400px; height: 200px;">
Lägg ut inlägg<input type="submit">
</form>
<form action = "LogInHTML.php" method="GET">
<BR> Logga ut <input type="submit">
</form>

</body>
</html>