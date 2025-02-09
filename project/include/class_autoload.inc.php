<?php

/*
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
 $path = "type/";
 $extension = ".class.php";
 require_once $path . $className . $extension;

}
 /*
 if (!file_exists($fullPath))
 {
    return false;
 }

 include_once $fullPath;
}
*/

spl_autoload_register('myAutoLoader');

function myAutoLoader ($className){
   $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


   //$path = __DIR__ . '../classes';
   if(strpos($url, 'include')){
     $path = '../classes/';
   }
   /*
   if (strpos($url, 'include') !== false)
   {
      $path = 'classes/';
   } else {
     $path = 'classes/';
   }
*/ 

   $extension = '.class.php';
   require_once ($path. $className . $extension);
}

?>