<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Student{
            var $name;
            var $major;
            var $gpa;

        function __construct($_name, $_major, $_gpa) //constructor
        {
            $this->name = $_name;
            $this->major = $_major;
            $this->gpa = $_gpa;

        }    
        
        function hasHonors(){       //object functioon. all student object cna use the function
            if($this->gpa >= 3.5){
                return "true";
            }
            else{     
                return "false";           
            }
        }
    }    
        $student1 = new Student("Irwan", "Computer science", 4);  //create new student
        $student2 = new Student("Suzzty", "BENL", 3.3);

        echo $student1->hasHonors() . "<br>";
        echo $student2->hasHonors();
    ?>
</body>
</html>