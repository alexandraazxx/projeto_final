<?php

class Conexao{
  static $host = '127.0.0.1';
  static $user = 'root';
  static $pass = 'info';
  static $database = 'db_catalogo_3e';
  static $port = '3306'; 
  static $con;
       
  public static function getConnection(){
    if(!self::$con){
        self::$con = new mysqli(self::$host, self::$user, self::$pass, self::$database, self::$port);
    if(self::$con->connect_error){
        echo "Ocorreu um erro:" . self::$con->connect_error;
        die();
        }
     }
     return self::$con;
   }
}

?>