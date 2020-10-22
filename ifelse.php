<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $male = true;
        $tall = false;

        if($male && $tall){
            echo "you are a tall male";
        }
        elseif($male && !$tall){
            echo "You are not tall male";
        }
        else{
            echo"You are not tall and not male";
        }
    ?>
</body>
</html>