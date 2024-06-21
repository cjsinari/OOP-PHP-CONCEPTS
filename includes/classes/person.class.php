<?php



class Person{
 //Properties
 //if private, it's used for sensitive data properties
 private $name;
 private $eyecolour;
 private $age;

public static $drinkingAge = 18; 
 
public function __construct($name, $eyecolour, $age)
{
  $this->name = $name;
  $this->eyecolour = $eyecolour;
  $this->age = $age;
}

//Methods
public function setName($name)
{
  $this->name = $name;
}

public function getDrinkingAge()
{
  return self::$drinkingAge;
}

public function getName()
{
  return $this->name;
}

//static method
public static function setDrinkingAge($newDrinkingAge)
{
  self::$drinkingAge = $newDrinkingAge;
}



}
 
?>