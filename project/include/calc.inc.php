<?php
declare (strict_types = 1);
include 'class_autoload.inc.php';


$operation = $_POST['operation'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new Calculator($operation, $num1, $num2);

try{
  echo $calc->calculator();
}catch (TypeError $error ){
    echo "Error!" . $error->getMessage();
}





?>