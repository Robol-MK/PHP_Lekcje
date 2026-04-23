<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><a href="index.php"><button>główna</button></a>
    <h1>Skrypt sprawdzajączy czy liczba pierwsza</h1>
    <form method="post">
        Liczba : <input type="number" name = "liczba">
         <input type="submit" value="Sprawdź">
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

if ($_POST) {
    $liczba = $_POST["liczba"];

    if (czyPierwsza($liczba)) {
        echo "$liczba jest liczbą pierwszą";
    } else {
        echo "$liczba nie jest liczbą pierwszą";
    }
}
?>
</body>
</html>