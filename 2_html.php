<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>

  <h4>Lista</h4>
    <ul>
        <li>Poznań</li>
        <li>Łódź</li>
        <li>Gniezno</li>
    </ul>

    <?php
    $city = "Środa wlkp.";
    echo <<< LIST
    <ul>
        <li>Poznań</li>
        <li>Łódź</li>
        <li>Gniezno</li>
        <li>$city</li>
    </ul>
    LIST;

    echo "Dodanie skryptu:<br>";
    //include(), include_once(), require(), require_once()

    // include ("script.php");

    // require("script.php");

    require_once("./scripts/script.php");
    require_once("./scripts/script.php");
    echo "<br>string";

    ?>
  </body>
</html>