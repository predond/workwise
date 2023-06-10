<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>WorkWise - password reset</title>

  <script defer src="script.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="shutter"></div>
  <div id="loginHeader">
    <img src="assets/logo.png" alt="logo">
    <h1>WorkWise</h1>
    <h5>Resetowanie hasła</h5>
  </div>
  <div class="userForm password">
    <form action="index.php" method="post">
      <input type="password" name="password" placeholder="Nowe hasło:">
      <input type="passwordRepeat" name="passwordRepeat" placeholder="Powtórz hasło:">
      <div class="buttons">
        <a href="index.php" class="button">ANULUJ</a>
        <p></p>
        <button type="submit" class="button">POTWIERDŹ</button>
      </div>
    </form>
  </div>
  <footer>
    WorkWise &copy; 2023
  </footer>
</body>
</html>