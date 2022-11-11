<?php
  include __DIR__ . '/layouts/header.php';
?>
<!-- CSS -->
<link rel="stylesheet" href="assets/styles/background.css">
<link rel="stylesheet" href="assets/styles/style.css">

<body>
<!-- Messaggio di errore in fase di login-->
<div class="mess">
  <h4>Qualcosa è andato storto, controlla che email e password siano scritte correttamente, <a href="log-in.php">riprova qui<a/></h4>
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
    background-color: red;
  }
</style>