<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Opdracht 2 - PHP - Verwerk</title>
	</head>

	<body>
		
		<?php
		
			// ISSET SUBMIT

			if (isset($_POST['submit']))
			{
				// Voeg de koppeling naar de database toe

				require 'config.php';

				// Lees het formulier uit

				$Naam = $_POST['Bandnaam'];
				$Land = $_POST['Landvanherkomst'];
				$AantalLeden = $_POST['Aantalleden'];
				$Muzieksoort = $_POST['Soortmuziek'];
				$info = $_POST['Algemeneinformatie'];
				

				// Maak de QUERY!!

				$query = "INSERT INTO back12_bands VALUES (NULL, '$Naam', '$Land', '$AantalLeden', '$Muzieksoort', '$info')";

				// Als de opdracht goed wordt uitgevoerd

				if(mysqli_query($mysqli,$query))
				{
					echo "<p> Band $Naam is toegevoegd aan de database! </p>";
				}

				else if(mysqli_error($mysqli))
				{
					echo "<p> Fout bij het toevoegen van band $Naam aan de database! </p>";
				}
				
			}

			// Anders

			else
			{
				echo "<p> Geen gegevens ontvangen... </p>";
			}
		
			echo"<p><a href='band_toevoeg.html'>Terug</a></p>";
		
		?>
		
	</body>
</html>


