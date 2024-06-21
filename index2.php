<?php
//Regular class

include('classes/simple.class.php');

$obj = new SimpleClass();
$obj->helloWorld();

//Anonymous class--don't get stored in memory of sites
$newObj = new class(){
  public function helloWorld(){
    echo "Hello World!";
  }
};

$newObj->helloWorld();



?>