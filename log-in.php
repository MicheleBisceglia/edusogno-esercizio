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
          <input type="password" id="password" name="password" placeholder="Scrivila qui">
        </div>

        <input type="submit" value="ACCEDI" class="form-btn">
      </form>
      <div class="link">
        <a href="index.php">Non hai un progilo?Registrati!</a>
      </div>
    </div>
    
    <!-- /log-in form -->

  </div>
  <!-- /Main -->
</body>
</html>