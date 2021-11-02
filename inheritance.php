<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inheritance</title>
</head>
<body>
   <?php 
      class Triangle {
         public $thisTriangle = array('a Triangle');
         function triangleType(){
            for($i = 0; $i < count($this->thisTriangle); $i++){
               echo "This is ".$this->thisTriangle[$i]."<br>";
            }
            echo "<br>";
         }
      }

      class IsoscelesTriangle extends Triangle {
         function __construct(){
            array_push($this->thisTriangle, "an Isosceles Triangle");
         }
      }

      class EquilateralTriangle extends Triangle {
         function __construct(){
            array_push($this->thisTriangle,  "an Isosceles Triangle", "an Equilateral Triangle");
         }
      }

      $triangle1 = new IsoscelesTriangle();
      $triangle1->triangleType();

      $triangle2 = new EquilateralTriangle();
      $triangle2->triangleType();
   ?>
</body>
</html>