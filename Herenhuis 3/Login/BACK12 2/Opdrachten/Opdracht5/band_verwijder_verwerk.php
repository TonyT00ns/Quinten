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
		<title> Opdracht 5 Verwerk </title>
	</head>

	<body>
		
		<?php
if (isset($_POST['submit']))
{
    //koppeling
    require 'config.php';

    //lees het formulier uit
    $id = $_POST['ID_band'];
    $naam = $_POST['Naam'];

    //Query
    $query = "DELETE FROM back12_bands
              WHERE ID_band = '$id'";
    //Als het lukt
    if(mysqli_query($mysqli, $query))
    {
        echo "<p>Band " . $naam . " is verwijderd!</p>";
    }
    //anders
    else
    {
        echo "<p>Fout bij verwijderen user met id $id</p>";
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