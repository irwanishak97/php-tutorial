<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Movie{
            public $title; //dulu guna var now guna public. basically sama je var and public. it is open to anyone in the class
            private $rating; // only can use PG-13, R, U, G, other than that NR
        
        function __construct($_title, $_rating)
        {
            $this->title = $_title;
            $this->setRating($_rating);
        }

        function getRating(){
            return $this->rating;
        }

        function setRating($aRating){   //pass 1 argument                // $this->rating = $aRating;   //this->rating = class movie attributes
            if($aRating == "PG-13" || $aRating == "R"|| $aRating == "U" || $aRating == "G"){
                $this->rating = $aRating;  //boleh set rating to anything luar class.
                }else{
                    $this->rating = "Not Rated";
                }
        }

    }

        $avengers = new Movie("Avengers", "DOG"); //create new movie.
        //  $avengers->setRating("R");
        echo $avengers->getRating();
    ?>
</body>
</html>