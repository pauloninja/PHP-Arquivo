<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        date_default_timezone_set('Brazil/East');//US/Eastern
        $_agora = getdate();
        print_r($_agora);
        ?>
    </body>
</html>