<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        // $_contador = 1;
         // while($_contador < 5){
         //echo "Naruto" . "</br>";
         //$_sorteio = rand(1, 60);//aleatorio
        // echo $_sorteio . " ";
        // $_contador += 1; // += msm coisa de $_contador

         //fatores do while
         //criação da variavel $_contador = 1
         //condição de existencia $_contador < 5
         //incremento da variavel  $_contador += 1;
        // }
        for ($_contador = 1; $_contador < 5; $_contador ++){//$_contador += 1
            $_sorteio = rand(1, 60);//menas linhas
            echo $_sorteio . " ";
        }
    ?>
</body>
</html>