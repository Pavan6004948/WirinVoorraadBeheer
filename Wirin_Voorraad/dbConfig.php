<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "wirin_voorraad";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error){
    die("connection failed: ". $connection->connect_error);
}

class DbConfig{

    public function connect(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=wirin_voorraad", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}

?>