<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="assocarray.php" method="post">

        Name: <input type="text" name="student">
    
        <input type="submit">


    </form>
    <?php
    $grades = array("Jim" => "A+", "Pam" => "C", "Irwan" => "A", "Amirah" => "B+"); //key => value
    
   
    echo $grades[$_POST["student"]]; 
    
    // echo $grades["Jim"]; pass key, and unique. print only jim value.

    // if (is_array($grades) || is_object($grades)) {
    //     foreach ($grades as $grades) {
    //         echo $grades . "<br>";
    //     }
    // }

    ?>
</body>

</html>