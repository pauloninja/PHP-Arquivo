<?php require_once("../../conexao.php/conexao.php"); ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/crud.css" rel="stylesheet">

    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main>  
            <div id="janela_formulario">
                <form action="inserir.php" method="post">
                <input type="text" name="nometransportadora" placeholder="nome">
                <input type="text" name="endereco" placeholder="Endereço">
                <input type="text" name="cidade" placeholder="cidade">
                <select name="estados">
                    <option value="1">Acre</option>
                    <option value="2">Amapa</option>
                </select>
                <input type="text" name="telefone" placeholder="telefone">
                <input type="text" name="cep" placeholder="cep">
                <input type="text" name="cnpj" placeholder="CNPJ">
                <input type="submit" value="inserir">
                </form>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>