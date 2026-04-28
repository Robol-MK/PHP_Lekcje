<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylezadciezkie2.css">
</head>
<body>
    <a href="index.php"><button>główna</button></a>
     <form action="zadciezkie2.php" method="post">
        
        <input type="submit" value="Prześlij" name="btprzeslij"/>
    </form>

    <?php
    function Czypierwsza($c)
    {
    if($c < 2) return false;

    for ($i = 2;$i < $c; $i++)
        {
            if($c % $i ==  0)
                {
                    return false;
                }
                
        }
        return true;
    }
    
     if(isset($_POST["btprzeslij"]))
        {
            
            echo "TAbela";

            echo "<table>";

            for($i = 1;$i <= 10;$i++)
                {
                    echo "<tr>";

                    for($j = 1;$j <= 10;$j++)
                        {


                            $iloczyn = ($i - 1) * 10 + $j;
                    
                            

                            if(Czypierwsza($iloczyn))
                                {
                                   $class = "blue";
                                }
                                else
                                    {
                                        $class = "white";
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