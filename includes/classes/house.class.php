<?php
class Person{
    //Properties
    //if private, it's used for sensitive data properties
    public $name;
    public $age;
   
   //public static $drinkingAge = 18; 
    /*
   public function __construct($name, $eyecolour, $age)
   {
     $this->name = $name;
     $this->eyecolour = $eyecolour;
     $this->age = $age;
   }*/
   
   /*Methods
   public function setName($name)
   {
     $this->name = $name;
   }
   
   public function getDrinkingAge()
   {
     return self::$drinkingAge;
   }*/
   
   public function getPerson()
   {
     return $this->name;
     return $this->age;
   }
   
   /*static method
   public static function setDrinkingAge($newDrinkingAge)
   {
     self::$drinkingAge = $newDrinkingAge;
   } */
}

class House{
    public $address;

    public function getAddress()
   {
     return $this->address;
     
   }
  

}
?>