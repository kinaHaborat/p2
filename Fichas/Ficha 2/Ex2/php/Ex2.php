<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex2.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Segundo primeiro exercício        *
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Ex2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <?php
            echo "<h1>Resposta:</h1>";
            $numeroA = $_POST["numeroA"];
            $numeroB = $_POST["numeroB"];
            $numeroC = $_POST["numeroC"];
            $numeroD = $_POST["numeroD"];
            echo 'A soma entre '.$numeroA.' e '.$numeroC.' é igual a: '.($numeroA+$numeroC).'<br>';
            echo 'A multiplicação de '.$numeroB.' por '.$numeroD.' é igual a: '.($numeroB*$numeroD).'<br><br>';
            if (($numeroA+$numeroC)>($numeroB*$numeroD)) {
                echo 'O número '.($numeroA+$numeroC).' é maior que o número '.($numeroB*$numeroD).'!';
            } else if (($numeroA+$numeroC)<($numeroB*$numeroD)) {
                echo 'O número '.($numeroA+$numeroC).' é menor que o número '.($numeroB*$numeroD).'!';
            } else{
                echo "Os números são iguais!";
            }
            
        ?>
    </body>
</html