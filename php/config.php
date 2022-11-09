<?php

$host = "127.0.0.1";
$user = "root";
$password = "root";
$database = "edusogno";
$port = 3306;

$connection = new mysqli($host, $user, $password, $database, $port);

if($connection === false){
  die("Errore di connessione: " . $connection->connect_error);
}

?>