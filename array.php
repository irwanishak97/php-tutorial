<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <form action="array.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        Nangka: <input type="checkbox" name="fruits[]" value="nangka"><br>
        <input type="submit">
    </form>

    <?php
    $fruits = $_POST["fruits"];
    if (is_array($fruits) || is_object($fruits)) {
        foreach ($fruits as $fruits) {
            echo $fruits . "<br>";
        }
    }
    ?>
</body>

</html>