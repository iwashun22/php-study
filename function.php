<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Function</title>
</head>
<body>
   <?php 
      function sayHi($name, $age = null){
         echo "Hello $name";
         if($age){
            echo ", you are $age years old";
         }
         echo "<br>";
      }
      sayHi('Jackie', 21);
      sayHi('everybody');
   ?>

   <h3>If statement</h3>
   <form action="function.php" method="post">
      <input type="text" name="number">
      <input type="submit">
   </form>

   <?php 
      # if statement
      $num = $_POST['number'];

      if(!$num) {
         echo "Put any number here";
      } elseif($num > 10) {
         echo "The number is bigger than 10";
      } elseif($num > 5) {
         echo "The number is bigger than 5";
      } elseif($num > 0) {
         echo "The number is a positive number";
      } else {
         if(!is_numeric($num)){
            echo "The input isn't a number";
            return;
         }
         echo "The number is a negative number";
      }
   ?>
</body>
</html>