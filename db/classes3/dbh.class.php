<?php
//include('db/class_autoload.inc.php');

class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "oop_db";
 
   //method for setting up db connection:
  protected function connect(){
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->password);
    
    //optional attribute used to fetch data from database:
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}

?>
