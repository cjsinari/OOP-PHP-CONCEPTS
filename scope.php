<?php
//Scope resolution operator(::)

//1st class
class firstClass{
    //Properties
    const EXAMPLE = "You can't change this!";

    //Methods
    public static function test(){
       $testing = "This is a test!";
       return $testing;
    }
}

//$a = firstClass::test();
//echo $a;

//2nd class
class secondClass extends firstClass{
    //Properties
    public static $staticProperty = "A static property";

    //Methods
    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo self::$staticProperty;
        //referencing to another method or property in the same class(self)
    
    }
}

$b = secondClass::anotherTest();
echo $b;
//You can access the property & method of child class
//or the property of parent class












?>