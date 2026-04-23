<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><a href="index.php"><button>główna</button></a>
<!--Napisz skrypt w ktrym pobieramy od użytkownika 2 liczby całkowite, dodajemy je
i wyświetlamy wynik -->

<form method="post">
1 liczba : <input type="number" name = "x">
<br><br>
2 liczba : <input type="number" name = "y">
<br><br>
<input type="submit" name = "dodaj" value = "Dodaj">
<br><br>
<input type="submit" name = "odejmij" value = "Odejmij">
<br><br>
<input type="submit" name = "pomnoz" value = "MNożenie">
<br><br>
<input type="submit" name = "dzielenie" value = "Dzielenie">
<br><br>
<input type="submit" name = "nwd" value = "NWD">

</form>

<?php

if(isset($_POST["dodaj"]))
    {
        $x = $_POST['x'];
        $y = $_POST['y'];

          $suma = $x + $y;

    echo "<h3>Wynik: $suma</h3>";
    }
    if(isset($_POST["odejmij"]))
    {
        $x = $_POST['x'];
        $y = $_POST['y'];

          $suma = $x - $y;

    echo "<h3>Wynik: $suma</h3>";
    }
    if(isset($_POST["pomnoz"]))
    {
        $x = $_POST['x'];
        $y = $_POST['y'];

          $suma = $x * $y;

    echo "<h3>Wynik: $suma</h3>";
    }
    if(isset($_POST["dzielenie"]))
    {
        $x = $_POST['x'];
        $y = $_POST['y'];

          $suma = $x / $y;

    echo "<h3>Wynik: $suma</h3>";
    }
     if(isset($_POST["nwd"]))
    {
        $x = $_POST['x'];
        $y = $_POST['y'];

          $suma = nwd($x,$y);

    echo "<h3>Wynik: $suma</h3>";
    }
    function nwd($a,$b)
    {
        while($a != $b)
            {
                if($a > $b)
                    $a = $a- $b;
                else
                    $b = $b - $a;
            }
            return $a;
    }
?>
</body>
</html>