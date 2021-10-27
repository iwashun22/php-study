<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Arrays</title>
</head>
<body>
   <?php 
      # you can contains any variable types in it
      $people = array("Jessie", "Mike", "Kevin", "Emily");
      # reasign
      $people[0] = "Joseph";
      echo $people[0];
         echo "<br>";
      echo count($people);
   ?>

   <hr>

   <form action="array.php" method="post">
      <h3>Favorite fruits</h3>
      Apple: <input type="checkbox" name="fruits[]" value="apple"> <br>
      Orange: <input type="checkbox" name="fruits[]" value="orange"> <br>
      Watermelon: <input type="checkbox" name="fruits[]" value="watermelon"> <br>
      Peach: <input type="checkbox" name="fruits[]" value="peach"> <br>
      Cherry: <input type="checkbox" name="fruits[]" value="cherry"> <br>
      <input type="submit">
   </form>

   <?php 
      $fruits = $_POST["fruits"];
      echo $fruits[0];
   ?>
</body>
</html>