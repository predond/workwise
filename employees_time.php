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
  <main class="employeesTimeLayout">
    <div>
      <div id="calendarWrapper"></div>
      <script src="scripts/CalendarPicker.js"></script>
      <script>
        const nextYear = new Date().getFullYear() + 1;
        const myCalender = new CalendarPicker('#calendarWrapper', {
            // If max < min or min > max then the only available day will be today.
            min: 0,
            max: new Date(), // NOTE: new Date(nextYear, 10) is "Nov 01 <nextYear>"
            locale: 'pl-PL', // Can be any locale or language code supported by Intl.DateTimeFormat, defaults to 'en-US'
            showShortWeekdays: false // Can be used to fit calendar onto smaller (mobile) screens, defaults to false
        });

        var currentDate = myCalender.value;
        var currentDay = myCalender.value.getDay();
        var currentToDateString = myCalender.value.toDateString();
        myCalender.onValueChange((currentValue) => {
            currentDateElement = currentValue;
            currentDayElement = currentValue.getDay();
            currentToDateString = currentValue.toDateString();

            console.log(`The current value of the calendar is: ${currentValue}`);
          });
      </script>
    </div>
    <div>
      <h2>DD.MM.YYYY</h2>
      <select id="employeesSelector">
        <option>Wybierz pracownika</option>
        <option>Pracownik 1</option>
        <option>Pracownik 2</option>
        <option>Pracownik 3</option>
      </select>
      <div>
        <table>
          <tr>
            <td>Wiek:</td>
            <td>32</td>
          </tr>
          <tr>
            <td>Płeć:</td>
            <td>Mężczyzna</td>
          </tr>
          <tr>
            <td>Telefon:</td>
            <td>123 456 789</td>
          </tr>
        </table>
      </div>
    </div>
  </main>
  <footer>
    WorkWise &copy; 2023
  </footer>
</body>
</html>