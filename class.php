<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book{
            var $title;
            var $author;            //define attributes
            var $pages;

            function __construct() //normal function
            {
                echo "New book created <br>";
            }//constructor
        }

        $book1 = new Book;
        $book1->title = "Harry potter";
        $book1->author = "JK rowling";
        $book1->pages = 400;


        $book2 = new Book;
        $book2->title = "Lord of the rings";
        $book2->author = "Tolkien";
        $book2->pages = 700;

        echo $book1->title . " and the author is ";
        echo $book1->author . "<br>";
        
        
        echo $book2->title . " and the author is ";
        echo $book2->author . "<br>";
        
    ?>
</body>
</html>