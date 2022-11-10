<?php
require_once('config.php');

$nome = $connection->real_escape_string($_POST['nome']);
$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);
$attendes = $connection->real_escape_string($_POST['attendes']);

//Ricerca utenti dopo richiesta post
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $sql_select = "SELECT * FROM utenti WHERE email = '$email'";
  if($result = $connection->query($sql_select)){
    if($result->num_rows == 1) {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      //Se la password è verificata inizio la sessione
      if(password_verify($password, $row['password'])){
        session_start();
        
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
    
        header("location: ../personal.php");
      }else{
        //Lancio un errore se la password è sbagliata
        header('location: ../log-in.php');
        echo'<small class="validator">la password non è corretta</small>';;
      }
    }else{
        //Lancio un errore se l'email è sbagliata
        header("location: ../log-in.php");
        echo "non ci sono account con questa email ";
    }
  }else{
    echo "errore in fase di login";
    header("location: ../log-in.php");
  }
}
?>