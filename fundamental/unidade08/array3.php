<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
           echo "Existe o elemento? " . in_array("Laranja",$_salada) . "</br>";//1 existe 0 não
           echo "Existe o elemento? " . in_array("Abacaxi",$_salada) . "</br>";//1 existe 0 não
           echo "Existe o elemento? " . array_search("Abacate",$_salada) . "</br>";// ele traz o elemento e a posição
        ?>
    </body>
</html>