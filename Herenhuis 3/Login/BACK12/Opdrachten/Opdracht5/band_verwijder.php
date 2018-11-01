<?php

	// Voeg het bestand session.php toe
	require 'session.php';

	// Voeg het bestand config.php toe
	require 'config.php';


?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Opdracht 5 </title>
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
        echo "<p> Weet u zeker dat u de volgende band wilt gaan verwijderen? </p>";
        echo "<form name='form1' method='post' action='band_verwijder_verwerk.php'>";
        echo "<input type='hidden' name='ID_band' value='$bandid'>";
        echo "<p>Band Naam:";
        echo "<input type='text' name='Naam' value='" . $rij['Naam'] . "' disabled/></p>";
        echo "<p><input type='submit' name='submit' value='Verwijder' />";
        echo "</form>";

        echo "<p><a href='../Opdracht3.1/band_uitlees.php'>Terug</a> naar overzicht</p>";

    }


?>
	</body>
</html>