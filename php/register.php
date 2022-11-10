<?php

require_once("config.php");

$nome = $connection->real_escape_string( $_POST['nome']);
$cognome = $connection->real_escape_string( $_POST['cognome']);
$email = $connection->real_escape_string( $_POST['email']);
$password = $connection->real_escape_string( $_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//inserisco i dati dell'utente
$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$hashed_password')";
if ($connection->query($sql) === true){
//se la connessione va a buon fine reindirizzo nella pagina di login
  header("location: ../log-in.php");
}else{
//se la connessione non viene portata a termine lancio un messaggio di errore
  echo "Errore durante registrazione utente $sql." . $connection->error;
}
