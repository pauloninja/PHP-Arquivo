<?php

if (isset($_POST['submit'])) {
   // print_r('nome: ' . $_POST['nome']);
   // print_r('<br>');
   // print_r('email: ' . $_POST['email']);
   // print_r('<br>');
   // print_r('Endereço: ' . $_POST['telefone']);
   // print_r('<br>');
   // print_r('Sexo: ' . $_POST['genero']);
   // print_r('<br>');
   // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
   // print_r('<br>');
   // print_r('Cidade: ' . $_POST['cidade']);
   // print_r('<br>');
   // print_r('Estado: ' . $_POST['estado']);
   // print_r('<br>');
   // print_r('Endereço: ' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone =  $_POST['telefone'];
    $sexo = $_POST['genero'];
    $date_nasc = $_POST['date_nasc'];
    $cidade = $_POST['cidade'];
    $estado =  $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,date_nasc,cidade,estado,endereco) 
    VALUES ('$nome','$email','$telefone','$sexo','$date_nasc','$cidade','$estado','$endereco')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato-Mysql e Php</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulario de Contato</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone:</label>
                </div>
                <br>
                <label for="date_nasc"><b>Data de Nascimento:</b></label>
                <input type="date" name="date_nasc" id="date_nasc" required>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereco:</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

</body>

</html>