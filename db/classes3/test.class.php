<?php
//include('db/class_autoload.inc.php');

class Test extends Dbh{
   
 public function getUsers(){
    $sql = "SELECT * FROM users";
    $statement = $this->connect()->query($sql);
    while($row = $statement->fetch()){
        echo $row['first_name'] . '<br>';
    }
 }

 //Changing SQL stmt when you get user input
 //Stmt is ran by db first and info is inserted later; prevents SQL injection
 //Also prevents running user data and SQL stmt simultaneously
 public function getUsersStatement($first_name, $last_name){
    $sql = "SELECT * FROM users WHERE first_name = ? AND last_name = ? ";
    $statement = $this->connect()->prepare($sql);
    $statement->execute([$first_name, $last_name]);
    $names = $statement->fetchAll();

    foreach ($names as $name) {
      echo $name['last_name'] . '<br>';

    }
 }

 //inserting/updating data in db
 public function setUsersStatement($first_name, $last_name){
    $sql = "INSERT INTO users (first_name, last_name) VALUES (?, ?)";
    $statement = $this->connect()->prepare($sql);
    $statement->execute([$first_name, $last_name]);
 }



}


?>








