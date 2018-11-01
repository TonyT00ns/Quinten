<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Oefening 3.1 - PHP - Verwerk </title>
	</head>

	<body>
		
		<?php
		
			// Toevoeg config.php

			require ('config.php');

			// Maak de QUERY!

			$query = "SELECT * FROM back12_users";

			// Vang het resultaat van de query op in 'resultaat'

			$resultaat = mysqli_query($mysqli, $query);

			// Als het resultaat uit 0 rijen bestaat
		
			if(mysqli_num_rows($resultaat) == 0)
			{
				echo "<p> Helaas, er zijn geen resultaten gevonden!";
			}
		
			// Als er wel resultaten zijn gevonden
		
			else
			{
				// Tabel
				
				echo "<table border='1'>";
				
				// Via een while lus worden alle rijen uitgelezen en getoond!
				
				while ($rij = mysqli_fetch_array($resultaat))
				{
					echo "<tr>";
					echo "<td>" . $rij['ID'] . "</td>";
					echo "<td>" . $rij['Email'] .  "</td>";
					echo "<td> <a href='user_detail.php?id=".$rij['ID']."'>detail</a></td>";
					echo "<td> <a href='user_wijzig.php?id=".$rij['ID']."'>wijzig</a></td>";
					echo "</tr>";
				}
				
				echo "</table>";
				
			}
		?>
		
	</body>
</html>