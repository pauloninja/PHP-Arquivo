<?php
    $gasolina = 4.55;//4.9 arredonta pra media 
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // arredondar para media
            echo round($gasolina) . "</br>";

            // arredondar para cima
            echo ceil($gasolina) . "</br>";


            // arredondar para baixo
            echo floor($gasolina) . "</br>";


            
        ?>
        
        
    </body>
</html>