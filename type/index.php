<?php
//declare(strict_types = 1);
include('class_autoload.inc.php');
include('person.class.php');
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
$person1 = new Person();

try{
 $person1->setName("Cyril");
 echo $person1-> getName(); 
}

catch (TypeError $e){
  echo "Error!: " . $e->getMessage();
}


?>
</body>
</html>