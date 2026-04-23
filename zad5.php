<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pracownicy:</h1>
   <form method="POST">
    <p>Wpisz Pracownika np (Jan;Kowalski;magazynier;4200)<input type="text" name ="pracownicy"></p>
     <p>Jak chcesz wpisać kolejnego to dopisz *</p>
     <input type="submit" value="Dodaj" name="btRozdziel"/>
     </form>
    
<?php 
if (isset($_POST["btRozdziel"]))
    {
$pracownicy = $_POST["pracownicy"];
//$pracownicy = "Jan;Kowalski;magazynier;4200*Tomasz;Nowak;spawacz;5600*Barbara;Kwiatkowska;księgowa;6700*Maciek;Kulik;Programist;6600*Tung Tung Tung;Sahur;Bezrobotny;67";

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
    }
?>
</body>
</html>