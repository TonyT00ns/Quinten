<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Oefening 2.2 verwerk pagina</title>
	</head>

	<body>
		
		<?php
		
			// ISSET SUBMIT

			if (isset($_POST['submit']))
			{
				// Voeg de koppeling naar de database toe

				require ('config.php');

				// Lees het formulier uit

				$Email = $_POST['Email'];
				$Gebruikersnaam = $_POST['Gebruikersnaam'];
				$Wachtwoord = sha1($_POST['Wachtwoord']);
				$Level = $_POST['Level'];

				// Maak de QUERY!!

				$query = "INSERT INTO back12_users VALUES (NULL, '$Email', '$Gebruikersnaam', '$Wachtwoord', $Level)";

				// Schrijf de query naar het scherm!!

				echo $query;

				// Als de opdracht goed wordt uitgevoerd

				if(mysqli_query($mysqli,$query))
				{
					echo "<p> User $gebruikersnaam is toegevoegd aan de database! </p>";
				}

				else if(mysqli_error($mysqli))
				{
					echo "<p> Fout bij het toevoegen van user $gebruikersnaam aan de database! </p>";
				}
				
			}

			// Anders

			else
			{
				echo "<p> Geen gegevens ontvangen... </p>";
			}
		
			echo"<p><a href='user_form.html'>Terug</a></p>";
			
		?>
		
	</body>
</html>