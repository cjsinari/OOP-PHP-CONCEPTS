<?php

//class is going to be used if 
//another class in project needs sumn from it

abstract class Visa{
  public function visaPayment(){
    return "Perform a payment"; 
  }

//abstract function(if used, entire class has to be abstract)
//if any class extends to abstract class, a getPayment method must be used:
abstract public function getPayment(); //--method


}


?>