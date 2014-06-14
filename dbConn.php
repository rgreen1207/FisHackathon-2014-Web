<?php
$host = "localhost";
$dbName = "gree1924"; 
$username = "gree1924"; 
$pwd = "11e46c7092551b4";

//creates connection
$dbConn = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $pwd);

// Sets Error handling to Exception so it shows ALL errors when trying to get data
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>