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

            function __construct($aTitle, $aAuthor, $aPages) //normal function //allows you to initialize an object's properties upon creation of the object.
            {
                $this->title = $aTitle; //referring to current object.
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }//constructor
        }

        $book1 = new Book("Harry potter", "JK rowling", 400);
        $book2 = new Book("Lord of the rings", "Tolkien", 800);
        
        echo "The title of the book is " . $book1->title . " and the author is " . $book1->author ." and the book has " . $book1->pages . " pages";
    ?>
</body>
</html>