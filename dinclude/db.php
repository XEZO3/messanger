<?php
class database{
private static $host ;
private static $dbname;
private static $username;
private static $password ;
 protected static function connect(){
    database::$host ="localhost";
    database::$dbname ="messanger";
    database::$username ="root";
    database::$password= "";
    $dsn = "mysql:host =".database::$host.";dbname=".database::$dbname."";
    $con= new PDO ($dsn,database::$username,database::$password);
    return $con;
}
 static function query($sql,$parms){
        $query = database::connect()->prepare($sql);
        $query->execute($parms);
        return $query;
  }

}
?>