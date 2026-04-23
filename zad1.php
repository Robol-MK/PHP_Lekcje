<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><a href="index.php"><button>główna</button></a>
    <form action="zad1.php" method="POST">
        <p>Wprowadz tekst: 
            <input type="text" name="tekst">
        </p>
        <p>Wprowadz Separator: 
            <input type="text" name="separator">
        </p>
        <input type="submit" value="Rozdziel" name="btRozdziel"/>
    </form>

<?php
if (isset($_POST["tekst"]) && isset($_POST["separator"])) {

    $rozdziel = $_POST["tekst"];
    $separator = $_POST["separator"];

    $tab = explode($separator, $rozdziel);

    echo "<table border='1'>";
    echo "<tr><th>Samochody</th></tr>";

    for ($i = 0; $i < count($tab); $i++) {
        echo "<tr><td>" . $tab[$i] . "</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>