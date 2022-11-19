<?php
    $_salada = array("Maça", "Abacaxi", "Uva", "Abacate", "Morango");

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
           echo $_salada[0] . "</br>";
           echo $_salada[1] . "</br>";
           echo $_salada[2] . "</br>";
           $_salada[] = "goaiba"; //colocou por ultimo no array
           $_salada[4] = "Morango";


           echo $_salada[3] . "</br>";

           echo count($_salada);

        ?>

        <pre>
        <?php
        print_r($_salada);
        ?>
        </pre>
    </body>
</html>