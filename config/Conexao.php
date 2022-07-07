<?php

class Conexao{
  static $host = 'sql107.epizy.com';
  static $user = 'epiz_32123333';
  static $pass = 'IzQhTyVfY7KhwV';
  static $database = 'epiz_32123333_projetofinal';
  static $port = '3306'; 
  static $con;
       
  public static function getConnection(){
    if(!self::$con){
        self::$con = new mysqli(self::$host, self::$user, self::$pass, self::$database, self::$port);
        self::$con->set_charset("utf8mb4");
    if(self::$con->connect_error){
        echo "Ocorreu um erro:" . self::$con->connect_error;
        die();
        }
     }
     return self::$con;
   }
}

?>