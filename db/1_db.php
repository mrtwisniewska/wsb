<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>

  <h4>Użytkownicy z bazy</h4>

    <?php
    require_once("../scripts/connect.php");
    $sql = "SELECT * FROM `user`;";
    $result = $conn->query($sql);
    $user = $result -> fetch_assoc();
    echo "$user[firstname]<br>";

    while($user = $result -> fetch_assoc()){
        echo <<< USER
        Imię i nazwisko: $user[firstname] $user[lastname]<br>
        USER;
    }
    ?>
    
  </body>
</html>