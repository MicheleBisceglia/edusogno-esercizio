<?php
require_once('config.php');

$nome = $connection->real_escape_string($_POST['nome']);
$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $sql_select = "SELECT * FROM utenti WHERE email = '$email'";
  if($result = $connection->query($sql_select)){
    if($result->num_rows == 1) {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      if(password_verify($password, $row['password'])){
        session_start();

        $_SESSION['nome'] = $row['nome'];
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
    
        header("location: ../personal.php");
      }else{
        echo "la password non è corretta";
      }
    }else{
        echo "non ci sono account con questa email";
    }
  }else{
    echo "errore in fase di login";
  }
  $connection->close();
}
?>