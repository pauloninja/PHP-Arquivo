<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 

        $_dia = "segunda";
        
        if($_dia == "sábado" || $_dia == "domingo" ){// uma da condição seja verdadeira
            echo "Pode descansar: " . "</br>";
        }else{
            echo "Dia de trabalho." . "</br>";
        }

        $_idade = 18;
        $_sexo = "feminino";

        if($_idade >= 18 && $_sexo == "feminino"){// tem q atender as duas condições
            echo "Pode entrar na festa. " . "</br>";
        }else {
            echo "Não pode entrar na festa. " . "</br>";
        }

        $_idade = 18;
        $_sexo = "feminino";

        if( ($_idade >= 18 && $_sexo == "feminino") || ($_idade <= 18 && $_sexo == "masculino")){// tem q atender as duas condições
            echo "Pode entrar na festa. " . "</br>";
        }else {
            echo "Não pode entrar na festa. " . "</br>";
        }



        ?>
    </body>
</html>