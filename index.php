<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>WorkWise</title>

  <script defer src="scripts/script.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <?php
    include 'scripts/database.php';
      checkDatabase('init');
  ?>
</head>
<body>
  <div class="shutter"></div>
  <div id="loginHeader">
    <img src="assets/logo.png" alt="logo">
    <h1>WorkWise</h1>
    <h5>Twoja mapa do skutecznego zarządzania</h5>
  </div>
  <div class="userForm">
    <form method="post">
      <input type="text" name="login" placeholder="Login:">
      <input type="password" name="password" placeholder="Hasło:">
      <button type="submit" class="button">ZALOGUJ</button>
      <?php
        if (isset($_POST['login']) && $_POST['login'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
            checkCredentials(strtolower($_POST['login']), $_POST['password']);
        }
      ?>
    </form>
    <div id="helpLinks">
      <a href="password.php">Nie pamiętasz hasła?</a>
      <a href="#loginProblem">Masz problem z logowaniem?</a>
    </div>
  </div>
  <div id="loginProblem" class="modal-container">
    <section class="modal">
      <header class="modal-header">
        <h2 class="modal-title">Pomoc techniczna</h2>
        <a href="#" class="modal-close">Close</a>
      </header>
      <div class="modal-content">
        <table>
          <tr>
            <td><strong>Administrator:</strong></td>
            <td></td>
            <td><a href="tel:+48123456789">+48 123 456 789</a><br>
                <a href="mailto:administrator@workwise.pl">administrator@workwise.pl</a></td>
          </tr>
          <tr>
            <td><strong>Serwis techniczny:</strong></td>
            <td></td>
            <td><a href="tel:+48987654321">+48 987 654 321</a><br>
                <a href="mailto:serwis@workwise.pl">serwis@workwise.pl</a></td>
          </tr>
        </table>
      </div>
    </section>
  </div>
  <footer>
    WorkWise &copy; 2023
  </footer>
</body>
</html>