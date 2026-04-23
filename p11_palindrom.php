<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Palindrom</title>
</head>
<body><a href="index.php"><button>główna</button></a>
    <h1>Czy palindrom?</h1>

    <form method="POST">
        <p>Wprowadź wyraz:
            <textarea name="txt"></textarea>
        </p>
        <input type="submit" value="Sprawdź" name="btsprawdz"/>
    </form>

    <?php
    if (isset($_POST["btsprawdz"])) 
    {
        $txt = $_POST["txt"];

       
        $txt = strtolower($txt);
         $txt = trim($txt);
         

        if ($txt == strrev($txt)) 
        {
            echo "To jest palindrom";
        } 
        else 
        {
            echo "To NIE jest palindrom";
        }
    }
    ?>
</body>
</html>