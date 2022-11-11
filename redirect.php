<?php
  include __DIR__ . '/layouts/header.php';
?>
<!-- CSS -->
<link rel="stylesheet" href="assets/styles/style.css">
<link rel="stylesheet" href="assets/styles/background.css">

<body>
<!-- Messaggio di registrazione riuscita-->
  <div class="mess">
    <h4>Registrazione effettuata con successco, per accedere al tuo profilo <a href="log-in.php">clicca qui<a/></h4>
  </div>
</body>
<?php
  include __DIR__ . '/layouts/background.php';
?>

<!-- CSS Messaggio di registrazione-->
<style>
  .mess {
    display: flex;
    justify-content: center;
    background-color: green;
  }
</style>