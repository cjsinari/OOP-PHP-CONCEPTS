<?php
include ('house.class.php');
include ('autoloader.inc.php');
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
 $path = "classes/";
 $extension = ".class.php";
 $fullPath =$path . $className . $extension;

 include_once $fullPath;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$person1 = new Person("CJ", "Brown", 20);
echo $person1->getPerson();

echo "<br>";
$house1 = new House("Fifth Avenue", 12);
echo $house1->getAddress();
?>