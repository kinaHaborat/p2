<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex7.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Setimo exercício da ficha 3       *                                   
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Ex7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <form class="formEx" name="Exercicio2" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Exercício 6</h1>
        <hr>
        <div class="center">
            <div class="align">
                <label for="numero">Insira o seu <strong>nome:</strong></label>
                <input class="input" type="text" name="nome">
            </div>
        </div>
        <input class="botton" type="submit" value="Enviar dados">
    </form>
    <?php
    if (isset($_REQUEST["nome"])) {
        $nome = $_REQUEST["nome"];
        $idade = $_REQUEST["idade"];
        $sexo = $_REQUEST["sexo"];

    }
    ?>
</body>

</html>