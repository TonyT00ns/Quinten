<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title> Oefening 2.1 - PHP Periode 4 </title>
	</head>

	<body>
		
		<?php
		
			// Voeg het bestand config.php toe:

			require ('../../../PDF, BAK EN PHP/config.php');

			// Maak de query

			$query = "INSERT INTO back12_users VALUES (NULL, 'haha@hotmail.com', 'test1', '0000', 0)";

			// Als de opdracht goed uitgevoerd wordt
		
			if(mysqli_query($mysqli,$query))
			{
				echo "<p> User test 1 is toegevoegd! </p>";
			}
		
			// Anders
		
			else
			{
				echo "<p> FOUT bij toevoegen! </p>";
				echo mysqli_error($mysqli); // Let op: Tijdelijk toevoegen!
			}

			

		?>
		
	</body>
</html>