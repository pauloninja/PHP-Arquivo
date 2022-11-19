<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
        $_numero1 = 5;
        $_numero2 = "5";

        if($_numero1 === $_numero2){// == igual ou tipo diferente ===
            echo "São iguais";
        }else{
            echo "São diferente";
        }

        ?>
    </body>
</html>