<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pracownicy:</h1>
<?php 
$pracownicy = "Jan;Kowalski;magazynier;4200*Tomasz;Nowak;spawacz;5600*Barbara;Kwiatkowska;księgowa;6700*Maciek;Kulik;uczem;0";

$lista = explode("*", $pracownicy);

echo "<table border='1'>";

foreach ($lista as $osoba) {
    $dane = explode(";", $osoba);

    echo "<tr>";
    foreach ($dane as $pole) {
        echo "<td>$pole</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>