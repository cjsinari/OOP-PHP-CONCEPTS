<?php

//Users class has all diff info that connects to db and queries it
//Model-interacts with db 
//shows info in website
class UserView extends Users{

   public function showUser($name){
   $results = $this->getUser($name);
   echo "Full name: " . $results[0]['first_name'] . " " . $results[0]['last_name'] . "<br>";

   }



}