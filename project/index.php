<?php
declare (strict_types = 1);
//include 'include/class_autoload.inc.php';
include('include/class_autoload.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
   <form action="include/calc.inc.php" method="POST">
    <p>My calculator</p>
    <input type="number" name="num1" placeholder="first number">
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="multiply">Multiplication</option>
        <option value="div">Division</option>
    </select>
    <input type="number" name="num2" placeholder="second number">
    <button type="submit" name="submit">Calculate</button>
   </form>

</body>
</html>