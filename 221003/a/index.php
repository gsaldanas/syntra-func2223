<?php
// Dit zijn mijn variabelen...
# kan ook als comment
   $voornaam = "gaspar";
   $achternaam = "Saldaña Sandoval";
   $getal1 = 5;
   $getal2 = 7;
   $getal3 = $getal1 + 1;
   $getal3 = $getal3 + 1;
   $getal3 += 3;
   $getal3++;
   $getal3 = NULL;
   //$sum = $getal1 + $getal2;
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
    echo "<h1>Hallo " . $voornaam . "  " . $achternaam . ",</h1>";
    echo "<h1>$getal1 + $getal2</h1>";
    echo "<h1>". $getal1 + $getal2 ."</h1>";
    echo "<h2>". ucfirst($voornaam) ."</h2>";
    echo "<h3>". $getal3 ."</h3>";
    
    ?>
  </body>
</html>
