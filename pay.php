<?php
//Interfaces--a blueprint used to group together specific classes 
// to tell them how to behave e.g types of methods in diff classes 
// to perform certain functions
 
interface PaymentInterface {
  public function payNow();
}

interface LoginInterface{
    public function loginFirst();
}

class PayPal implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}




class Visa implements PaymentInterface {
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow(){}
    public function paymentProcess(){
    $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface  $paymentType){
    //$paymentType->paymentProcess();
    }
}


$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType); 





?>