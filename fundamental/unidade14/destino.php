<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
       <!-- <pre>
           <?php
           // print_r($_GET);
            ?>
        </pre>  -->

        <?php
          //  echo $_POST["nome"] . "</br>";
           // echo $_POST["email"];
        ?>

        <?php 

           //if(isset($_POST["nome"])){
           //     $_nome = $_POST["nome"];
           // }else{
           //     $_nome = "Sem definição";
           // }

           // if(isset($_POST["email"])){
           //     $_email = $_POST["email"];
           // }else{
           //     $_email = "Sem definição";
           // } jeito certo so uma linha


            $_nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
            $_email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";
            echo "Nome: " . $_nome . "<br>";
            echo "Email: " . $_email . "<br>";

        ?>
    </body>
</html>