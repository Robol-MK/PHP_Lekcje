
    <!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Liczby</title>
</head>
<body><a href="index.php"><button>główna</button></a>
<!-- 
    Napisz Skrypt w którym na stronie wyświetlą sie liczby po przecinku
    w zakresie podanym przez użytkownika, poprzez formularz
-->
<form method="post">
    Od: <input type="number" name="a">
    <br><br>
    Do: <input type="number" name="b">
    <br><br><br>
    <input type="submit" name = "dane">
   
</form>
<br>
<?php
 if(isset($_POST["dane"]))
    {
$a = $_POST['a'];
$b = $_POST['b'];

for($i = $a; $i <= $b; $i++) {
    echo"$i, ";
}
    }
?>

</body>
</html>