<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>Hello world</h1>
   <?php 
      echo 'hi'; // print out 'hi'
   ?>
   <?php 
      $text = 'goodbye world'; // assaign variable
      echo strtoupper($text); // string to uppercase
      echo $text[0]; // first character of the string
      $text = str_replace("world", "html", $text); // replace some part of the string
      echo $text;
   ?>
</body>
</html>