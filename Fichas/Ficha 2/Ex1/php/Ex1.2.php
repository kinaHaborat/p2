<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex1.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Primeiro exercício prático        *
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
        <form name="Exercicio1" method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1>Exercício 1</h1>
            <label for="numero">Introduza uo número inteiro positivo aleatório:</label>
            <input type="number" name="numero">
            <input type="submit" value="Enviar dados">
        </form>
        <?php
            Echo "<h1>Resposta:</h1>";
        if (isset($_GET["numero"])){    
            $numero = $_GET["numero"];
            if ($numero > 100) {
                echo "O numero $numero é maior que 100!";
            }
            else if ($numero<100){
                echo "O numero $numero é menor que 100!";
            }
            else {
                echo "O numero inserido é igual 100!";
            }
        }
        ?>
    </body>
</html