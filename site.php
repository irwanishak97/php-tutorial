<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="site.php" method="get" style="font-weight: bolder;">
        Name: <input type="text" name="username">
        Age: <input type="text" name="age">
        <input type="submit">
    </form>
    <br>
    Your name is    <?php echo $_GET["username"] ?> 
    and age is <?php echo $_GET["age"]  ?>
    
</body>

</html>