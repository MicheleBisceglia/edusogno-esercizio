<?php

require_once("config.php");

$nome = $connection->real_escape_string( $_POST['nome']);
$cognome = $connection->real_escape_string( $_POST['cognome']);
$email = $connection->real_escape_string( $_POST['email']);
$password = $connection->real_escape_string( $_POST['password']);

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";
if ($connection->query($sql) === true){
  echo "Registrazione effettuata con successo";
}else{
  echo "Errore durante registrazione utente $sql." . $connection->error;
}
?>