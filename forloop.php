<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $luckyNumber = array(4,8,14,230, 23, 2);
        //array start at 0, so x =0;
        for($x=0;$x<count($luckyNumber);$x++){ //creating variable;looping condition;increment
            echo "$luckyNumber[$x] <br>";
        }
    ?>
</body>
</html>