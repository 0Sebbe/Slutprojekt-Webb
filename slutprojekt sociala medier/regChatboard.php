<?php
$db = new SQLite3('Användare.sq3');
$tempInlägg = $_POST["inlägg"];

$db = new SQLite3('CHATBOARD.sq3');

$db->exec("CREATE TABLE IF NOT EXISTS CHATBOARD(användare text, inlägg text, datum text, anmäld bool)");
$db->exec("INSERT INTO CHATBOARD VALUES('".$tempNamn."',".$tempInlägg.",'".$tempDatum."',".$tempAnmäld.")");
?>