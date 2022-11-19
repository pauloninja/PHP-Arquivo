<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
        $_dia = "sabado";
        switch ($_dia){
            case "segunda":
                echo "Hoje é segunda";
                break;
            case "terça":
                echo "hoje é terça";
                break;
            case "quarta":
                echo "hoje é quarta";
            break;
            case "quinta":
                echo "hoje é quinta";
            break;
            case "sexta":
                echo "hoje é sexta";
            break;
            default:
                echo "É final de semana";
        }
        ?>
    </body>
</html>