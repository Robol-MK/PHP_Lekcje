<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
    </style>
</head>
<body><a href="index.php"><button>główna</button></a>
    <h1>Skrypt zamienający wyrazu w tekście </h1>
    <form action = "p10_zamiana.php" method="POST">
        <p>Wprowadź tekst:
            <textarea name="txt" id = "txtArea"></textarea>
        </p>
        <p>Podmien wyraz: 
            <input type = "text" name="szukany"/>
        </p>
        <p>Zamien na  wyraz: 
            <input type = "text" name="zamiana"/>
        </p>
        <input type="submit" value="Zamień" name="btSzukaj"/>
    </form>
    
    <?php
        if(isset($_POST["btSzukaj"]))
        {
            $tekst = $_POST["txt"];
            $szukany = $_POST["szukany"];
            $zamiana = $_POST["zamiana"];

            $zmodyfikowany = str_replace($szukany,$zamiana,$tekst);

            echo "Tekst po zamianie:";
            echo "<p>$zmodyfikowany</p>";

        }
    ?>
</body>
</html>