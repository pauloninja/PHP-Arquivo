<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
        $_fumante = true;
        if($_fumante == true){
            echo "Vc é um fumante. " . "</br>";
        }else{
            echo "Você não e fumante" . "</br>";
        }
        ?>

        <?php 
        $_fumante = false;
        if($_fumante == true){
            echo "Vc é um fumante. " . "</br>";
        }else{
            echo "Você não e fumante" . "</br>";
        }
        ?> 

<?php 
        $_fumante = false;//não igualdade test
        if($_fumante != true){
            echo "Vc é um fumante. " . "</br>";
        }else{
            echo "Você não e fumante" . "</br>";
        }
        ?> 

<?php 
        $_fumante = false;//não igualdade test
        if(!$_fumante){
            echo "Vc é um fumante. " . "</br>";
        }else{
            echo "Você não e fumante" . "</br>";
        }
        ?> 
    </body>
</html>