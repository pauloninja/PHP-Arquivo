<?php
    $_nome = "Naruto";
    $_telefone = "32424232";
    $_fumante = false;
   // $_fumante = null; não aparece
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo isset($_nome) . "</br>";
            echo isset($_telefone) . "</br>";
            echo isset($_fumante) . "</br>";//isset e pra testar
           // echo isset($_fumante) . "</br>";


            echo isset($_email) . "</br>";
        ?>
    </body>
</html>