<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex4.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Quarto exercício                  *                                   
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Ex4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <?php
        echo "<h1>Exercicio 4</h1>";
            $numeros = array($_REQUEST["numeroA"], $_REQUEST["numeroB"], $_REQUEST["numeroC"], $_REQUEST["numeroD"]);
            echo "Os números atribuidos por ordem inserção são: $numeros[0], $numeros[1], $numeros[2], $numeros[3]";
            sort($numeros);
            echo "<br>Os números atribuidos por ordem crescente são: $numeros[0], $numeros[1], $numeros[2], $numeros[3]";
        ?>
    </body>
</html