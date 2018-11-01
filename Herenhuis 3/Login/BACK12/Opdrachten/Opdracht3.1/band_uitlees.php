
<?php

	// Ik heb hier geen session.php toegevoegd, want anders laat hij de accounts met level 0 de uitlees pagina niet zien...

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
	}

	// Voeg het bestand config.php toe
	require 'config.php';

	// Voeg het bestand config.php toe
	require 'config.php';


?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Opdracht 3.1 - PHP - Verwerk </title>
	</head>

	<body>
		
		<?php
		
			// Voeg het bestand config.php toe

			require ('../../../PDF, BAK EN PHP/config.php');

			// Maak de QUERY!!

			$query = "SELECT * FROM back12_bands";

			// Vang het resultaat van de QUERY op in 'resultaat'

			$resultaat = mysqli_query($mysqli, $query);
		
			// Haal de eerste rij (user) uit het resultaat
		
			$rij = mysqli_fetch_array($resultaat);
			
			// Toon het bandnaam 
		
			echo "<table border='1'>";
			echo "<tr>";
				echo "<th>Naam:</th>";
				echo "<th>Muzieksoort:</th>";
				echo "<th>Details:</th>";
				echo "<th>Wijzigen:</th>";
				echo "<th>Verwijderen:</th>";
			echo "</tr>";
		
				while ($rij = mysqli_fetch_array($resultaat))
				{
					echo "<tr>";
						echo "<td>" . $rij['Naam'] . "</td>";
						echo "<td>" . $rij['Muzieksoort'] .  "</td>";
						echo "<td><a href='../Opdracht3.2/band_detail.php?ID_band=".$rij['ID_band']."'>Detail</a></td>";
						echo "<td><a href='../Opdracht4/band_wijzig.php?ID_band=".$rij['ID_band']."'>Wijzig</a></td>";
						echo "<td><a href='../Opdracht5/band_verwijder.php?ID_band=".$rij['ID_band']."'>Verwijder</a></td>";
					echo "</tr>";
				}
				
				echo "</table>";
		
		// uitlog link
		echo "<p><a href='../Opdracht6/loguit.php'> Uitloggen </a></p>";

		?>

	</body>
</html>