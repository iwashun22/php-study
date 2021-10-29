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

   <form action="array.php" method="get">
      <h3>Favorite fruits</h3>
      Apple: <input type="checkbox" name="fruits[]" value="apple"> <br>
      Orange: <input type="checkbox" name="fruits[]" value="orange"> <br>
      Watermelon: <input type="checkbox" name="fruits[]" value="watermelon"> <br>
      Peach: <input type="checkbox" name="fruits[]" value="peach"> <br>
      Cherry: <input type="checkbox" name="fruits[]" value="cherry"> <br>
      <input type="submit">
   </form>

   <?php 
      $fruits = $_GET["fruits"];
      echo "<b>Your favorite fruits are: </b>";
      if($fruits){
         for($i = 0; $i < count($fruits); $i++){
            echo $fruits[$i]." ";
         }
      }
      echo "<hr>";
   ?>

   <h3>Associative arrays</h3>

   <form action="array.php" method="post">
      <h4 style="margin: 0;">Name list</h4>
      <ul style="margin: 5px;">
         <li>Mike</li>
         <li>Emma</li>
         <li>Brian</li>
         <li>Johny</li>
      </ul>
      <input type="text" name="name">
      <input type="submit" value="see the grade">
   </form>

   <?php 
      # Associative arrays
      # It works like a Map() in javascript
      # careful: => this is for array, -> this is for object
      $grades = array('mike'=>'B-', 'emma'=>'A+', 'brian'=>'C+');
      $grades['johny'] = 'B+';
      $name = strtolower($_POST['name']);
      if($name){
         if($grades[$name]){
            echo $grades[$name];
         }
         else{
            echo "No name \"$name\" on the list";
         }
      }
   ?>
</body>
</html>