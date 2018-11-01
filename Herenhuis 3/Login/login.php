<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Q to DyFe | Sign In</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<form action="" method="post">
  <div class="container">
	<h2>Sign In</h2>  
    <label for="Email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required>
	  
    <label for="Wachtwoord"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Wachtwoord" max-length="30" required>  
	<p>
	<?php
		// Als het formulier is verstuurd
		if (isset($_POST['login']))
		{
			// Voeg de databaseconnectie toe
			require 'config.php';
			// Lees de gegevens uit
			$Email = $_POST['Email'];
			$Wachtwoord = sha1($_POST['Wachtwoord']);
			$Naam = $_POST['Naam'];
			// Maak de Query
			$opdracht = "SELECT * FROM Table_user WHERE Email = '$Email' AND Wachtwoord = '$Wachtwoord'";
			
			// Voer de Query uit en vang het resultaat op
			$resultaat = mysqli_query($mysqli, $opdracht);
			// Controleer of het resultaat een rij (user) heeft opgeleverd
			if (!$resultaat || mysqli_num_rows($resultaat) > 0)
			{
				// Haal de user uit het resultaat
				$user = mysqli_fetch_array($resultaat);
				// Zet de gebruikersnaam en level in 2 verschillende sessions
				$_SESSION['Email'] = $user['Email'];
				$_SESSION['Level'] = $user['Level'];
				// Geef een melding
				echo "<p> Hallo $Naam, u bent ingelogd! </p>";
				echo "<p><a href='../index.php'> Ga verder </a></p>";
			}
			
			// Als het resultaat leeg is
			else
			{
				echo "<p> Naam en/of wachtwoord zijn onjuist! </p>";
				echo "<p><a href='login.php'> Probeer opnieuw! </a></p>";
			}
			
		}
		
		?>
	</p>  
	  <input type="submit" name="login" value="Sign In">
		
	<p><a href="#" style="color:dodgerblue">Forgot Password?</a></p>
	<p>Don't have an account?<a href="register.php" style="color:dodgerblue"><br>Register here</a></p> 
	  <a href="../index.php"></a>
	 
  </div>
</form>	
</body>
</html>