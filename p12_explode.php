<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Explode</title>
</head>
<body><a href="index.php"><button>główna</button></a>
    <h1>Rozdziel wyrazy</h1>

    <form action = "p12_explode.php" method="POST">
        <p>Wprowadź tekst:
            <input type="text" name= "rozdzielany">
        </p>
        <p>Wprowadź Separator:
            <input type="text" name= "separator">
        </p>
        <input type="submit" value="Rozdziel" name="btRozdziel"/>
    </form>

    <?php
    if (isset($_POST["btRozdziel"])) 
    {
       $rozdziel = $_POST["rozdzielany"];
       $separator = $_POST["separator"];

       $tab = explode($separator,$rozdziel);
       /*

       for($i = 0;$i < count($tab);$i++)
        {
            echo "wyraz $i: ".$tab[$i]."<br>";
        }
            */
  /* echo "<ul>";
foreach ($tab as $element)
{
    echo "<li>$element</li>";
}
echo "</ul>";*/
    
    for($i = 0;$i < count($tab);$i++)
        {
            echo "wyraz $i:".$tab[$i]."<br>";
        }
    }
    ?>
</body>
</html>