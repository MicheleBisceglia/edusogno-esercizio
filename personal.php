<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
  header("location: log-in.php");
  exit;

}


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
  <!-- Header -->
  <header></header>
  <!-- /Header -->

  <!-- Main -->
  <div class="container">
    <h1 class="title">
      <?php
      echo "Ciao " . $_SESSION["nome"] . " ecco i tuoi eventi"
      ?>
    </h1>

    <!-- events -->
    <div class="event-container">
      <div class="event">
        <h3>Nome evento</h3>
        <p>15-03-03</p>
        <div class="event-btn">
          JOIN
        </div> 
      </div>
      <div class="event">
        <h3>Nome evento</h3>
        <p>15-03-03</p>
        <div class="event-btn">
          JOIN
        </div> 
      </div>
      <div class="event">
        <h3>Nome evento</h3>
        <p>15-03-03</p>
        <div class="event-btn">
          JOIN
        </div> 
      </div>
    </div>
    <!-- /events -->
    <div class="bg-container">
      <div class="semicircle"></div>
      <div class="circle"></div>
    </div>
    <div class="bg-gray"></div>
  </div>
  <!-- /Main -->
</body>
</html>
