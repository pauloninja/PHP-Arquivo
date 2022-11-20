<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php
            $_salada = array("imagens/laranja.jpg","imagens/maca.jpg","imagens/abacate.jpg");
            $_codigo = $_GET["codigo"];

            echo $_salada[$_codigo];

        ?>
        
        <pre>
            <img src="<?php echo $_salada[$_codigo]  ?>" alt="">
        </pre>


    </body>
</html>