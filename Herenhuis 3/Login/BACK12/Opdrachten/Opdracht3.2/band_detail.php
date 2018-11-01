<?php

// Voeg het bestand session.php toe
require 'session.php';

// Voeg het bestand config.php toe
require 'config.php';


?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Opdracht 3.2 - PHP - Verwerk </title>
	</head>

	<body>
		
		<?php

				//Voeg het bestand config.php toe
				require '../../../PDF, BAK EN PHP/config.php';
				//Haal het user-id uit de URL
				$bandid = $_GET['ID_band'];
				//Maak de query
				$query = "SELECT * FROM back12_bands WHERE ID_band = " . $bandid;
				//Vang het resultaat van de query op in 'resultaat'
				$resultaat = mysqli_query($mysqli, $query);
				//Als het resultaat uit 0 bestaat
				if (mysqli_num_rows($resultaat) == 0)
				{
					echo "<p>Er is geen band met ID " .  $bandid . "</p>";
				}
				//Als er wel rijen zijn gevonden 
				else
				{
					//Haal de rij (user) uit het resultaat
					$rij = mysqli_fetch_array($resultaat);
					//Zet de gegevens van de user in een tabel
					echo "<h2>Gegevens van de band met ID $bandid:</h2>";
					echo "<table border='1'>";
					echo "<tr><td>Naam:</td>";
					echo "<td>" . $rij['Naam'] . "</td></tr>";
					echo "<tr><td>Land:</td>";
					echo "<td>" . $rij['Land'] . "</td></tr>";
					echo "<tr><td>Aantal Leden:</td>";
					echo "<td>" . $rij['AantalLeden'] . "</td></tr>";
					echo "<tr><td>Muzieksoort:</td>";
					echo "<td>" . $rij['Muzieksoort'] . "</td></tr>";
					echo "<tr><td>Info:</td>";
					echo "<td>" . $rij['info'] . "</td></tr>";
					echo "</table>";
				}
		
				echo "<p><a href='../Opdracht3.1/band_uitlees.php'>Terug</a> naar overzicht</p>";
			?>

	</body>
</html>