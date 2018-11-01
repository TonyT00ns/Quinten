<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> OPDRACHT 6 - Inlog </title>
	</head>

	<body>
		
		<?php
		// Als het formulier is verstuurd
		if (isset($_POST['inlog']))
		{
			// Voeg de databaseconnectie toe
			require 'config.php';
			// Lees de gegevens uit
			$Gebruikersnaam = $_POST['Gebruikersnaam'];
			$Wachtwoord = sha1($_POST['Wachtwoord']);
			// Maak de Query
			$opdracht = "SELECT * FROM back12_users WHERE Gebruikersnaam = '$Gebruikersnaam' AND Wachtwoord = '$Wachtwoord'";
			// Voer de Query uit en vang het resultaat op
			$resultaat = mysqli_query($mysqli, $opdracht);
			// Controleer of het resultaat een rij (user) heeft opgeleverd
			if (!$resultaat || mysqli_num_rows($resultaat) > 0)
			{
				// Haal de user uit het resultaat
				$user = mysqli_fetch_array($resultaat);
				// Zet de gebruikersnaam en level in 2 verschillende sessions
				$_SESSION['Gebruikersnaam'] = $user['Gebruikersnaam'];
				$_SESSION['Level'] = $user['Level'];
				// Geef een melding
				echo "<p> Hallo $Gebruikersnaam, u bent ingelogd! </p>";
				echo "<p><a href='../Opdracht3.1/band_uitlees.php'> Ga verder </a></p>";
			}
			
			// Als het resultaat leeg is
			else
			{
				echo "<p> Naam en/of wachtwoord zijn onjuist! </p>";
				echo "<p><a href='inlog.php'> Probeer opnieuw! </a></p>";
			}
			
		}
		
		?>
		
		<h1> Login: </h1>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td> Gebruikersnaam </td>
					<td><input type="text" name="Gebruikersnaam"></td>
				</tr>
				<tr>
					<td> Wachtwoord </td>
					<td><input type="password" name="Wachtwoord"></td>
				</tr>
				<tr>
					<td>&nbsp;  </td>
					<td><input type="submit" name="inlog" value="Login"></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>