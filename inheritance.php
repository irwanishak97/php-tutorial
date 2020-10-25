<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            
            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef{
            function makePasta(){
                echo "The chef make pasta <br>";
            }

            function makeSpecialDish()
            {
                echo "The chef makes chicken parmesan"; //this is overriding. dia boleh amik chef punya and tukar jadi dia punya
            }
        }

        $chef = new Chef(); //make few chef
        $chef->makeChicken(); //call function

        $ItalianChef = new ItalianChef(); //make few italian chef inherite from chef
        $ItalianChef->makeChicken(); //call function
        $ItalianChef->makePasta(); //only italian chef can make pasta not chef.

?>
</body>
</html>