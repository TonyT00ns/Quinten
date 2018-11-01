	<?php
	// Start de session
	session_start();
	// Als de gebruiker NIET is ingelogd
	// Dan bestaat de session 'Gebruiker' niet
	if (!isset($_SESSION['Gebruikersnaam']))
	{
	// Stuur de gebruiker direct terug naar 'inlog.php'
	header("location:../Opdracht6/inlog.php");
	}
	// Als de gebruiker wel is ingelogd, mag hij verder
	else
	{
	echo "<p> Welkom, " . $_SESSION['Gebruikersnaam'] . "</p>";
	// Als de gebruiker alleen 'kijk-rechten' heeft
	// En geen gebruikers mag toevoegen

	if ($_SESSION['Level'] == 0)
	{
	echo "<p> U heeft geen rechten om deze pagina te bekijken! </p>";
	echo "<p><a href='../Opdracht3.1/band_uitlees.php'> Ga terug </a></p>";
	exit();
	}
	}

	// Voeg het bestand config.php toe
	require 'config.php';
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Opdracht 7.2 - Session </title>
	</head>

	<body>

	</body>
</html>