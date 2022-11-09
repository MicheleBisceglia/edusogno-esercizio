<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
  <!-- Header -->
  <header></header>
  <!-- /Header -->

   <!-- Main -->
  <div class="container">
    <!-- Titolo -->
    <h1 class="title">
      Crea il tuo account
    </h1>
    <!-- /Titolo -->
    
    <!-- Register form -->
    <div class="form-container">
      <form action="php/register.php" method="POST">
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
          <input type="password" id="password" name="password" required placeholder="Scrivila qui">
        </div>
        <input type="submit" value="REGISTRATI" class="form-btn">
      </form>
      <div class="link">
        <a href="log-in.php">Hai già un account?Accedi!</a>
      </div>

    </div>
    <!-- /Register form -->
    <div class="bg-container">
      <div class="semicircle"></div>
      <div class="circle"></div>
    </div>
    <div class="bg-gray"></div>
  </div>
  <!-- /Main -->
</body>
</html>
