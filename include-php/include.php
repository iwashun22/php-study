<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Including php file</title>
</head>
<body>
   <?php 
      $title = 'I\'m learning php';
      $author = 'Shun';
      include 'header.php';
   ?>

   <?php 
      # you can include php file to use the functions or variables
      include 'tools.php';
      echo "There's $feetInMile feet in a mile<br>";
      sayHi('everybody');
   ?>
</body>
</html>