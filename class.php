<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Class and Object</title>
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
         # public: can access anywhere
         public $title;
         public $author;
         public $pages;

         # private: can access only in this class
         private $rating;

         # set a default except for the book title
         function __construct($aTitle, $aAuthor=null, $aPages="not labeled", $aRating=0){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
            $this->rating = $aRating;
         }

         # set a function
         function hasAuthor(){
            if($this->author){
               return "<br>The author of $this->title is $this->author";
            }
            return "<br>$this->title's author is unknown";
         }
      }

      $book1 = new Book('Hunger Games');
      $book2 = new Book('NiceBook', 'Harris', 400, 3.8);

      echo $book1->title;

      # $book2->rating = 4.5;
      # you can't do this because this variable is set to private

      echo $book1->hasAuthor();
      echo $book2->hasAuthor();
   ?>
</body>
</html>