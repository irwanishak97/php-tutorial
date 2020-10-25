<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $index = 1;
        while($index <= 5){        //loop condition like if
            echo "This is while loop. $index <br>";    //loop body
            $index++;
        }
    ?>
    <br>
    <?php
        $dodo = 6;
        do{
            echo "Do while loop $dodo <br>"; // do inside the body first then baru check condition
            $dodo++;
        }while($dodo <=5);
    ?>
</body>
</html>