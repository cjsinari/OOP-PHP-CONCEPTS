<?php
include('includes2/class_autoload.inc.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $usersObj = new UserView();
    $usersObj->showUser("Jen");   
  
    $usersObj2 = new UserControl();
    $usersObj2->createUser("Annalise", "Keating");
    
  ?>
</body>
</html>