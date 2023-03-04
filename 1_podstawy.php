<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
      <?php

          $firstname = "Marta";
          $lastname = "Wiśniewska";
          echo "Imię i nazwisko: $firstname $lastname<br>";
          echo 'Imię i nazwisko: $firstname $lastname<br>';

          //heredoc
          echo <<< DATA
          <hr>
          Imie: $firstname<br>
          Nazwisko: $lastname
          <br>
          DATA;

          
          $data = <<< "DATA"
          <hr>
          Data:<br>
          Imię: $firstname<br>
          Nazwisko: $lastname
          <br>
          DATA;

          echo $data;

          echo <<< 'DATA'
          <hr>
          Imię: $firstname<br>
          Nazwisko: $lastname
          <br>
          DATA;

        $bin = 0b1010;
        echo $bin; //10

        $oct = 010;
        echo $oct; //8

        $hex = 0xA;
        echo $hex; //10 

          // nowdoc


      ?>

  </body>

</html>