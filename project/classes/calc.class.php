<?php

class Calculator{
   //Properties
   public $operator;
   public $num1;
   public $num2;

   //Methods (constructor)
   public function __construct(string $one, int $two, int $three)
   {
     $this->operator = $one;
     $this->num1 = $two;
     $this->num2 = $three;
   }

  public function calculator(){
    switch($this->operator)
    {
     case 'add':
        $result = $this->num1 + $this->num2;
        return $result;
        break;
 
     case 'sub':
      $result = $this->num1 - $this->num2;
      return $result;
      break;   

     case 'multiply':
      $result = $this->num1 * $this->num2;
      return $result;
      break;   

     case 'div':
       $result = $this->num1 / $this->num2;
       return $result;
       break;   
      
     default:
      echo "Error!"; 
      break;
   }
  }
}



?>