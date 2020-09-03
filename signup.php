<html>
  <body>
    <form method="POST">
      Voornaam: <input type="text"name="voornaam"><br>
      Tussenvoegsel: <input type="text"name="tussenvoegsel"><br>
      Achternaam: <input type="text"name="achternaam"><br>
      Email: <input type="text"name="email"><br>
      Gebruikersnaam: <input type="text"name="gebruikersnaam"><br>
      Wachtwoord: <input type="password"name="wachtwoord"><br>
      Herhaal Wachtwoord: <input type="password"name="rptwachtwoord"><br>
      <input type="submit"name="sub" value="Account aanmaken!"><br>
      <br
      </form>
    </body>
  </html>
<?php
if(isset($_POST['rptwachtwoord'])){
  echo "<b>Kloppen deze gegevens?</b><br>";
  echo "<b>Voornaam:</b> ". $_POST['voornaam']."<br>";
  if (!empty($_POST['tussenvoegsel'])){
    echo "<b>Tussenvoegsel:</b> ". $_POST['tussenvoegsel']."<br>";
  }
  echo "<b>Achternaam:</b> ". $_POST['achternaam']."<br>";
  echo "<b>Email::</b> ". $_POST['email']."<br>";
  echo "<b>Gebruikersnaam:</b> ". $_POST['gebruikersnaam']."<br>";
  echo "<b>Wachtwoord:</b> ". $_POST['wachtwoord']."<br>";

  }



 ?>
