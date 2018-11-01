<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Oefening 4.1 - PHP - Verwerk </title>
	</head>

	<body>
		
		<?php
		
		// Voeg het bestand config.php toe
		
		require ('config.php');
		
		// Haal het user-id uit de URL
		
		$userid = $_GET['ID'];
		// echo $userid;
		
		// Maak de QUERY!!
		
		$query = "SELECT * FROM back12_users WHERE ID = $userid";
		
		// Vang het resultaat van de QUERY op in 'resultaat'
		
		$resultaat = mysqli_query($mysqli, $query);
		
		// Als het resultaat uit 0 rijen bestaat
		
		if (!$resultaat || mysqli_num_rows($resultaat) == 0)
		{
			echo "Helaas, er is geen user met ID $userid gevonden!";
		}
		
		// Als er wel resultaten zijn gevonden
		
		else
		{
			// Haal de rij (user) uit het resultaat 
			
			$rij = mysqli_fetch_array($resultaat);
			
			// Zet de gegevens van de user in een tabel!!
			
			echo "<h2> Gegevens van de user met ID $userid </h2>";
			echo "<table border='1'>";
			echo "<tr><td> Email: </td>";
			echo "<td>" . $rij['Email'] . "</td></tr>";
			echo "<tr><td> Gebruikersnaam: </td>";
			echo "<td>" . $rij['Gebruikersnaam'] . "</td></tr>";
			echo "<tr><td> Wachtwoord: </td>";
			echo "<td>" . $rij['Wachtwoord'] . "</td></tr>";
			echo "<tr><td> Level: </td>";
			echo "<td>" . $rij['Level'] . "</td></tr>";
			echo "</table";
		}

		?>

	</body>
</html>