<?php 
    // paso 1
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "andes";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    // passo 2
    if(mysqli_connect_errno()){
        die("Conexão falhou " . mysqli_connect_errno());
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>
      

    </body>
</html>
<?php
    mysqli_close($conecta);
?>