<?php


function conectar(){
    
try {
   $con= new PDO("mysql:host=localhost;dbname=dbemun","root","", 
           array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
   
   
    
} catch (PDOException $e) {
    
echo "erro encontrado na coneccao ". $e->getMessage()."numero do erro ".$e->getCode();

}
return $con; 
}



?>

