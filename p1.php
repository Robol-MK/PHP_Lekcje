<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    
    <h1 style = 'color:blue'>Porównanie skryptu  JS Z PHP</h1>
    <?php
    for($i =1; $i<=3; $i++)
        {
            echo "<h1 style = 'color:Purple'>Pierwsza aplikacja PHP</h1>";
        }
    ?>
    <script>
        for(let i =1; i <=3;i++)
        {
            document.write("<h1 style = 'color:green'>Tekst pochodzący z JavaScript</h1>");
        }
    </script>
</body>
</html>