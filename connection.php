<?php

class Database{

public static $connection;

public static function setUpConnection(){

    if(!isset(Database::$connection)){

        Database::$connection=new mysqli("localhost","user","*********","E Shop","port");
    }
}
//INSERT,UPDATE,DELETE
public static function iud($q){
 Database::setUpConnection();
 Database::$connection->query($q);   

}
public static function search($q){
Database::setUpConnection();
$resultSet=Database::$connection->query($q);
return $resultSet;

}


}





?>