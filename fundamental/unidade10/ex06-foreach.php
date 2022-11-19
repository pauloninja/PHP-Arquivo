<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda =  array("nome" => "naruto",
                          "telefone" => "9999-0000", 
                          "salario" => 1000.50,
                          "fumante" => true);
        foreach( $_agenda as $_contatos => $_valor){
            echo $_contatos . ": " . $_valor . "<br>";
        }
    ?>
</body>
</html>