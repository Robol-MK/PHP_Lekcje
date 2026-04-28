<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylezadciezkie1.css">
</head>
<body>
    <a href="index.php"><button>główna</button></a>
    <form action="zadciezkie1.php" method="post">
        <p>Podaj liczbe wierszy: <input type="number" name="lwierszy"></p>
        <p>Podaj liczbe kolumn: <input type="number" name="lkolumn"></p>
        <input type="submit" value="Prześlij" name="btprzeslij"/>
    </form>

    <?php
     if(isset($_POST["btprzeslij"]))
        {
            $wiersze = $_POST["lwierszy"];
            $kolumny = $_POST["lkolumn"];

            echo "TAbela";
            echo "<table>";

            for($i = 1;$i <= $wiersze;$i++)
                {
                    echo "<tr>";
                    for($j = 1;$j <= $kolumny;$j++)
                        {
                            $iloczyn = $i * $j;
                            
                            if($iloczyn % 2 == 0)
                                {
                                   $class = "yellow";
                                }
                                else
                                    {
                                       $class = "green";
                                    }
                                    echo "<td class ='$class'>$iloczyn</td>";
                        }

                    echo "</tr>";
                }
            echo "</table>";
        }
    ?>
</body>
</html>