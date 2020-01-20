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
        <title>Ex3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <?php
            echo "<h1>Exercicio 3:</h1>";
            echo "<h2>Tabuada do 5:</h2>";
            $tabuadaDo5 = 0;
            for ($i=1; $i <=10 ; $i++) { 
                $tabuadaDo5=5*($i);
                echo '5 X '.$i.' = '.$tabuadaDo5.'<br>'; 
            }
        ?>
    </body>
</html