<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
            $_data1 = new DateTime('2021-01-01');
            $_data2 = new DateTime('2022-04-03');
            $_intervalo = $_data1->diff($_data2);
        ?>

        <pre>
            <?php
            print_r($_intervalo);
            ?>
        </pre>

        <pre>
            <?php
            print_r($_intervalo->format('%ddays'));
            ?>
        </pre>

        <pre>
            <?php
            print_r($_intervalo->format('%a'));//todos os dias
            ?>
        </pre>

        <pre>
            <?php
            print_r($_intervalo->format('%r%a'));//pega porcentual negativo
            ?>
        </pre>

        <pre>
            <?php
            print_r($_intervalo->format('%d'));//dia
            ?>
        </pre>
    <body>
    </body>
</html>