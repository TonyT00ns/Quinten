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
		<title> Opdracht 4 </title>
	</head>

	<body>
		
		<?php

    //Voeg het bestand config.php toe
    require 'config.php';

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
        echo "<form name='form1' method='post' action='band_wijzig_verwerk.php'>";
        echo "<table width='200' border='1'>";
        echo "<tr><td>ID:</td>";
        echo     "<td><input type='text' readonly name='ID_band' value='$bandid'/></td></tr>";
        echo "<tr><td>Naam:</td>";
        echo     "<td><input type='text' name='Naam' value='" . $rij['Naam'] . "'/></td></tr>";
        echo "<tr><td>Land:</td>";
        echo     "<td><input type='text' name='Land' value='" . $rij['Land'] . "'/></td></tr>";
        echo "<tr><td>Aantal Leden:</td>";
        echo     "<td><input type='text' name='AantalLeden' value='" . $rij['AantalLeden'] . "'/></td></tr>";
        echo "<tr><td>Muzieksoort:</td>";
        echo     "<td><input type='text' name='Muzieksoort' value='" . $rij['Muzieksoort'] . "'/></td></tr>";
        echo "<tr><td>Info:</td>";
        echo     "<td><input type='text' name='info' value='" . $rij['info'] . "'/></td></tr>";
        echo "<tr><td>&nbsp</td>";
        echo     "<td><input type='submit' name='submit' value='Opslaan'/></td></tr>";
        echo "</table>";
        echo "</form>";
		
		echo "<p><a href='../Opdracht3.1/band_uitlees.php'>Terug</a> naar overzicht</p>";

    }
		

?>
		
	</body>
</html>

