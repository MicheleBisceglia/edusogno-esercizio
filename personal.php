<?php
  include __DIR__ . '/layouts/header.php';

  //inizio sessione una volta effettuato login utente
  session_start();
  if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("location: log-in.php");
    exit;
  }
  include __DIR__ . '/php/events.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>
<body>
<!-- Main -->
  <div class="container">
    <h1 class="title">
      <?php
      echo "Ciao " . $_SESSION["nome"] . " ecco i tuoi eventi"
      ?>
    </h1>
    <div class="event-container">
      <?php if (count($events) > 0) : ?>
        <?php foreach ($events as $event ) : ?>
          <div class="event">
            <h3><?= $event['nome_evento'] ?></h3>
            <p><?= $event['data_evento'] ?></p>
            <div class="event-btn">
              JOIN
            </div> 
          </div>
        <?php endforeach; ?>
        <?php else : ?>
          <div class="event-container">
            <div class="event">
              <h2>Al momento non ci sono eventi, torna più tardi!</h2>
            </div>
          </div>
      <?php endif; ?>
    </div>
  <!-- /events -->

    <?php
      include __DIR__ . '/layouts/background.php';
    ?>
  </div>
<!-- /Main -->
</body>
</html>
