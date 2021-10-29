<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php 
      class Person {
         var $name;
         var $age;
         var $hobbies;
      } 

      $jonas = new Person;
      $jonas->name = 'Jonas Stephen';
      $jonas->age = 19;
      $jonas->hobbies = array('Programming', 'Cooking', 'Tennis');

      echo $jonas->name.'<br>';
   ?>

   <?php 
      ### constructor

      class Book {
         var $title;
         var $author;
         var $pages;

         # set a default except for the book title
         function __construct($aTitle, $aAuthor="unknown", $aPages="not labeled"){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
         }
      }

      $book1 = new Book('Hunger Games');

      echo $book1->title;

   ?>
</body>
</html>