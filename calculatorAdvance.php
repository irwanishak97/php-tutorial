<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculatorAdvance.php" method="post">
        First number: <input type="number" step="0.1" name="num1"> <br>  <!--step untuk binary  -->
        Operator: <input type="textbox" name="operator"> <br>
        Second number: <input type="number" name="num2"> <br>
        <input type="submit">
    </form>

    <?php 
        $num1 = $_POST["num1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["num2"];

        if($operator == "+"){
            echo $num1 + $num2;
        }
        
        elseif($operator == "-"){
            echo $num1 - $num2;
        }
        
        elseif($operator == "*"){
            echo $num1 * $num2;
        }
        
        elseif($operator == "/"){
            echo $num1 / $num2;
        }
        else{
            echo "Invalid Operator";
        }
    ?>
</body>
</html>