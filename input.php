<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Interaction</title>
</head>
<body>
   <form action="input.php" method="get">
      <h3>user</h3>
      <input type="text" name="username">
      <input type="number" name="age">
      <input type="submit">
   </form>
   
   Your name is <?php echo $_GET["username"]; ?>
   <br/>
   You are <?php echo $_GET["age"]; ?> years old

   <hr>

   <form action="input.php" method="get">
      <h3>adding numbers</h3>
      <div>
         <input type="number" name="num1">
         <input type="number" name="num2">
         <input type="submit">
      </div>
   </form>

   <?php echo $_GET["num1"] + $_GET["num2"]; ?>

   <hr>

   <!--
      The difference between "get" and "post" method:
         - get: can assign and show up the variable on the URL
         - post: the variable doesn't show up on the URL and more secure
   -->
   <form action="input.php" method="post">
      <h3>password</h3>
      <input type="password" name="password">
      <input type="submit">
   </form>

   <?php 
      echo $_POST["password"];
   ?>
</body>
</html>