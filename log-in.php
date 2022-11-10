<?php
  include __DIR__ . '/layouts/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/script.js" ></script>
    <title>Edusogno</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>
<body>
<!-- Main -->
  <div class="container">
    <!-- Titolo -->
    <h1 class="title">
      Hai già un account?
    </h1>
    <!-- /Titolo -->

    <!-- log-in form -->
    <div class="form-container">
      <form action="php/login.php" method="POST">
        <div class="form-item">
          <label for="email">Inserisci la tua e-mail</label> <br>
          <input type="email" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="form-item">
          <label for="password">Inserisci la tua password</label> <br>
          <div class="form-password">
            <input type="password" id="password" name="password" placeholder="Scrivila qui">
            <i class="fas fa-eye eye" type="button" onclick="showpassword()"></i>
          </div> 
        </div>
       
        <input type="submit" value="ACCEDI" class="form-btn">
      </form>
      <div class="link">
        <a href="index.php">Non hai un progilo?Registrati!</a>
      </div>
    </div>
    <!-- /log-in form -->
    
    <?php
      include __DIR__ . '/layouts/background.php';
    ?>
  </div>
<!-- /Main -->
</body>
</html>