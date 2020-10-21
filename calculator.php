<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculator.php" method="get">
        Enter number 1: <input type="number" name="num1">
        <br>
        Enter number 2: <input type="number" name="num2">
        <input type="submit">
    </form>

    Answer:  <?php echo $_GET["num1"] + $_GET["num2"]?>
</body>

</html>