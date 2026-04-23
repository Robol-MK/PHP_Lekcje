<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sprawdzanie liczb pierwszych</title>
</head>
<body>

<a href="index.php"><button>główna</button></a>

<form action="zad4.php" method="POST">
    <p>Sprawdź czy pierwsza:
        <input type="text" name="tekst">
    </p>
    <input type="submit" value="Znajdź" name="btRozdziel"/>
</form>

<?php

function czyPierwsza($n) {
    if ($n < 2) return false;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isset($_POST["btRozdziel"])) {

    $rozdziel = $_POST["tekst"];
    $liczby = explode("*", $rozdziel);
    $ilepierwszych = 0;

    for($i = 0; $i < count($liczby); $i++) {

        $sprawdzana = intval($liczby[$i]);


        if(czyPierwsza($sprawdzana)) {
            echo "<span style='color:red;'>".$sprawdzana."</span>, ";
            $ilepierwszych++;
        } else {
            echo "<span style='color:green;'>".$sprawdzana."</span>, ";
        }
    }

    echo "<br> Ilość liczb pierwszych: $ilepierwszych";
}

?>

</body>
</html>