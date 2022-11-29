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

    //passo 3 query

    $consulta_produtos = "SELECT nomeproduto, precounitario, tempoentrega ";
    $consulta_produtos .= " FROM produtos";
    $consulta_produtos .= " WHERE tempoentrega = 5";
    $produtos = mysqli_query($conecta, $consulta_produtos );// cria produtos que fruto da consulta

    if( !$produtos){
        die("Falha na consulta ao banco de dados");
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>
        <ul>
      <?php
        while ( $registro = mysqli_fetch_assoc($produtos)){//assoc, row ou array  
        ?>
            <li><?php echo $registro["nomeproduto"] ?></li>
        <?php
        }  
        ?>
        </ul>
        <!--Fechamento de produtos para não-->
        <?php 
            mysqli_free_result($produtos);
        ?>
        
    </body>
</html>

    <!--Passo 3 fechamento da conexão-->
<?php
    mysqli_close($conecta);
?>