<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex1.1.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Parte 1 do primeiro exercício     *
        * prático                                      *
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Ex1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <?php
            Echo "<h1>Resposta:</h1>";
            $numero = $_GET["numero"];
            if ($numero > 100) {
                echo "O numero $numero é maior que 100!";
            }
            else if ($numero < 100){
                echo "O numero $numero é menor que 100!";
            }
            else {
                echo "O numero inserido é igual 100!";
            }
        ?>
    </body>
</html