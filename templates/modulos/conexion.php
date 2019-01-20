<?php
require_once "parametros.php";

 function conectarse(){

 $mysql= new mysqli(cn_host, cn_username, cn_password);
 if($mysql->connect_error){
  echo "Error conectandose al servidor de base de datos";
  echo "/n";
  echo $mysql->connect_error;
     exit();
 }
 if(!($mysql->select_db(cn_database))){
  echo "Error al conectarse a la base de datos";
 }
 return $mysql;
}
?>
