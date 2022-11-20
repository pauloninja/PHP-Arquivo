<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <form action="destino.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Digite seu e-mail">
            
            <input type="submit" value="Enviar Cadastro">
        </form>
    </body>
</html>