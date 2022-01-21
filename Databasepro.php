<?php
class Database
{

private static $dbHost="Localhost";
private static $dbName="bdbprojet";
private static $dbUser="root";
private static $dbUserPassword="";
private static $connection=null;

public static function connect()
{
try 
{
       self:: $connection= new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName ,self::$dbUser,self::$dbUserPassword);
       //self permet de savoir que c'est une variable statique
}
catch (PDOException $e)
{
    die($e->getMessage());

}
    return self::$connection;
}
public static function disconnect()
{
    self::$connection=null;
}

}
//Database::connect();

?>