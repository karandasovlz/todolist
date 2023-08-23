<?php

$sName= "localhost";
$uName= "root";
$pass= "root";
$dbName= "to_do_list";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$dbName",
                    $uName,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
}catch (PDOException $exception){
    echo "Connection failed : ". $exception->getMessage();
};