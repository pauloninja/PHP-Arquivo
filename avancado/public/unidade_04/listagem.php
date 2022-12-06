<?php require_once("../../conexao.php/conexao.php"); ?>

<?php

    // Consulta ao banco de dados - produtos
   $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario ";
   $produtos .= " FROM produtos ";
   $resultado = mysqli_query($conecta,$produtos);//conecta arquivo de conexao
   // if(!$resultado){
   //     die("Falha na consulta ao banco");
   // }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
      

        
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>  
            <?php 
                while($linha = mysqli_fetch_assoc($resultado)){

                
            ?>
            <ul>
                <li><?php echo $linha["nomeproduto"]?></li>
                <li><?php echo $linha["tempoentrega"]?></li>
                <li><?php echo $linha["precounitario"]?></li>
            </ul>
            <?php
                }

            ?>
            
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>