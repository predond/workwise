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
</head>
<body class="zoom content">
  <div class="shutter"></div>
  <header class="site-header">
    <a href="mainPage.php">
      <div class="site-name">
        <img src="assets/logo.png" alt="logo">
        <h1>WorkWise</h1>
      </div>
    </a>
    
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

    <ul class="nav-list">
      <li class="dropdown">
        <a href="#" class="nav-link">Pracownicy</a>
        <ul class="dropdown-menu">
          <li><a href="employees_list.php">Lista</a></li>
          <li><a href="employees_time.php">Czas pracy</a></li>
          <li><a href="employees_messages.php">Wiadomości</a></li>
        </ul>
      </li>
      <li><a href="history.php" class="nav-link">Historia</a></li>
      <li><a href="#" class="nav-link">Ustawienia</a></li>
      <li><a href="#" class="nav-link"><img src="assets/logout.png" alt="logout"></a></li>
      <li><a href="#" class="nav-link">Wyloguj</a></li>
    </ul>
  </header>
  <main>
    <form method="post" id="employeesSearchBar">
      <input type="text" name="employee" placeholder="Wyszukaj pracownika...">
      <input type="submit" value="szukaj">
    </form>
    <div id="employeesList">
      <div class="employeeTile" data-id="1">
        <img src="assets/employee_1.png" alt="osoba1">
        <div class="grid-container">
          <div class="tl">
            <td colspan="3">Osoba Osoba</td>
          </div>
          <div class="bl">
            <div class="grid-container">
              <div class="tl">Tel: 000 000 000</div>
              <div class="tr">Zarobki: 2 400zł</div>
              <div class="bl">Email: osoba1@workwise.com</div>
            </div>
          </div>
        </div>
      </div>

      <div class="employeeTile" data-id="2">
        <img src="assets/employee_1.png" alt="osoba2">
        <div class="grid-container">
          <div class="tl">
            <td colspan="3">Osoba Osoba</td>
          </div>
          <div class="bl">
            <div class="grid-container">
              <div class="tl">Tel: 000 000 000</div>
              <div class="tr">Zarobki: 3 600zł</div>
              <div class="bl">Email: osoba2@workwise.com</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    WorkWise &copy; 2023
  </footer>
</body>
</html>