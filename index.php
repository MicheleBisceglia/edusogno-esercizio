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
    <link rel="stylesheet" href="./assets/styles/style.css">
    <script src="assets/js/script.js" ></script>
    <title>Edusogno</title>
</head>
<body>
<!-- Main -->
  <div class="container">
    <!-- Titolo -->
    <h1 class="title">
      Crea il tuo account
    </h1>
    <!-- /Titolo -->
    
    <!-- Register form -->
    <div class="form-container">
      <form action="php/register.php" method="POST" >
        <div class="form-item">
          <label for="nome">Inserisci il tuo nome</label> <br>
          <input type="text" id="nome" name="nome" required placeholder="Mario">
        </div>

        <div class="form-item">
          <label for="cognome">Inserisci il tuo cognome</label> <br>
          <input type="text" id="cognome" name="cognome" required placeholder="Rossi">
        </div>

        <div class="form-item">
          <label for="email">Inserisci la tua e-mail</label> <br>
          <input type="email" id="email" name="email" required placeholder="name@example.com">
        </div>

        <div class="form-item">
          <label for="password">Inserisci la tua password</label> <br>
          <div class="form-password">
            <input  type="password" id="passwordid" name="password" placeholder="Scrivila qui">
            <i class="fas fa-eye eye" type="button" onclick="showpassword()"></i>
          </div> 
        </div>
        <input type="submit" value="REGISTRATI" class="form-btn">
      </form>
      <div class="link">
        <a href="log-in.php">Hai già un account?Accedi!</a>
      </div>

    </div>
    <!-- /Register form -->
    
    <?php
      include __DIR__ . '/layouts/background.php';
    ?>
  </div>
<!-- /Main -->
</body>
</html>



