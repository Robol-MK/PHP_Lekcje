<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button>główna</button></a>
    <form action="zad2.php" method = "POST">
        <p>Wprowadz tekst: 
            <input type="text" name = "tekst">
        </p>
        
        <input type="submit" value="Oblicz" name="btRozdziel"/>
    </form>
 <?php
if (isset($_POST["btRozdziel"]))
    { 
    $rozdziel = $_POST["tekst"];
    $separator = ";";

    $liczby = explode($separator,$rozdziel);
    $suma = 0;
    for($i = 0;$i < count($liczby);$i++)
        {
            $suma = $suma + intval($liczby[$i]);
        }
        $srednia = $suma / count($liczby);
        echo "Średnia z liczb = $srednia";
    }
?>
</body>
</html>