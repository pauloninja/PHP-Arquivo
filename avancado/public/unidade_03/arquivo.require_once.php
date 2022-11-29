<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php // require("curso1.php"); ?>
    <?php // echo "<br>"; ?>
    <?php // require_once("curso1.php"); ?>
    <?php //include("curso3.php"); ?><!--quanto não existir o arquivo ele mostra o erro mas continuar a pagina-->
    <?php //include("curso1.php"); ?>
    <?php //echo "<br>" ?>
    <?php //include("curso2.php"); ?>
    <?php //include_once("curso1.php"); ?><!--Once incluir uma vez so o arquivo se que ja existi-->

    <!--require quanto mostra um erro ja trava a pagina-->
    <?php require("curso1.php"); ?>
    <?php echo "<br>"; ?>
    <?php require_once("curso1.php");?>

    
</body>
</html>