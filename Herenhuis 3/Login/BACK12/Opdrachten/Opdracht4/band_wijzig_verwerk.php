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
		<title> Opdracht 4 verwerk </title>
	</head>

	<body>
		
		<?php
//Is het formulier verstuurd?
if (isset($_POST['submit']))
{
    //koppeling
    require 'config.php';

    //lees het formulier uit
    $id = $_POST['ID_band'];
    $naam = $_POST['Naam'];
    $land = $_POST['Land'];
    $aantalleden = $_POST['AantalLeden'];
    $muziek = $_POST['Muzieksoort'];
    $info = $_POST['info'];

    //Query
    $query = "UPDATE back12_bands
              SET Naam = '$naam', Land = '$land', AantalLeden = '$aantalleden', Muzieksoort = '$muziek', info = '$info'
              WHERE ID_band = '$id'";
    //Als het lukt
    if(mysqli_query($mysqli, $query))
    {
        echo "<p>Band is aangepast!</p>";
    }
    //anders
    else
    {
        echo "<p>Fout bij aanpassen user met id $id";
        echo mysqli_error($mysqli);
    }

}
else
{
    echo "<p>Geen gegevens ontvangen...</p>";
}

echo "<p><a href='../Opdracht3.1/band_uitlees.php'>Terug</a> naar overzicht</p>";
?>

	</body>
</html>