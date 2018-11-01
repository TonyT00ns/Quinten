<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Q to DyFe | Sign Up</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<form method="post" action="verwerk-register.php">
  <div class="container">
<?php
if (isset($_POST['Submit']))
{
	require './config.php'; 

	$Email = $_POST['Email'];	
	$Naam = $_POST['Naam'];
	$Wachtwoord = $_POST['Wachtwoord'];	
	$Wachtwoord2 = $_POST['Wachtwoord2'];	
	if($Wachtwoord == $Wachtwoord2)
	{
		$query = "INSERT INTO Table_user VALUES ('$Email','$Naam','$Wachtwoord','$Wachtwoord2')";
		if (mysqli_query($mysqli, $query))
		{
			echo "Dankuwel! U krijgt een bevestiging wanneer u in kan loggen met uw account!<br>";
			echo "<a href='login.php'>Naar login scherm</a>";		
		}
		else
		{
			echo "Er is iets fout gegaan, probeer later opnieuw.<br>";	
			echo "<a href='register.php'>Opnieuw beginnen</a>";
		}		
	}
	else
	{
		echo "Password is niet gelijk aan Repeat Password<br/>";
		echo "<a href='register.php'>Opnieuw beginnen</a>";
	}
}
?>	
  </div>
</form>			
</body>
</html>