<?php

//used for insert or updating info in db 
class UserControl extends Users{

  public function createUser($first_name, $last_name){
    //running the method from Users class
    $this->setUser($first_name, $last_name);   
  }



}