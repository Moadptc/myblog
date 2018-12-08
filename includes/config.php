<?php

$dsn = 'mysql:host=localhost;dbname=myblog'; // data source name
$user = 'root';
$pass = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try{

    $db = new PDO($dsn, $user, $pass, $option);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'You are Connected Welcome To Database';
}

catch(PDOException $e){

    echo 'failed To Connect ' . $e -> getMessage();

}

?>