<?php

//only class allowed to interact with db
//for db connections
//create different methods for different queries for reusability
class Users extends Dbh{

   protected function getUser($name){
    $sql = "SELECT * FROM users WHERE first_name = ?";
    $statement = $this->connect()->prepare($sql);
    $statement->execute([$name]);

    $results = $statement->fetchAll();
    return $results;
   }

   protected function setUser($first_name, $last_name){
    $sql = "INSERT INTO users (first_name, last_name) VALUES (?, ?)"; 
    $statement = $this->connect()->prepare($sql);
    $statement->execute([$first_name, $last_name]);

   }





}


