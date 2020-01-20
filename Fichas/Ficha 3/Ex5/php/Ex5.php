<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex5.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Quinto exercício da ficha 3       *                                   
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Ex5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <form class="formEx" name="Exercicio2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Exercício 5</h1>
        <hr>
        <div class="center">
            <div class="align">
                <label for="numero">Introduza um número <strong>Inteiro entre 1 e 10:</strong></label>
                <input class="input" type="number" name="nT">
            </div>
        </div>
        <input class="botton" type="submit" value="Enviar dados">
    </form>
    <?php


    if (isset($_REQUEST["nT"])) {   
        function tab($numero){
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class=\"formResp\">
                        <div class=\"align\">
                            <p>$numero X $i = ".($numero * ($i))."<br></p>
                        </div>
                    </div>";
            }  
        }
        tab($_REQUEST["nT"]);
    }
    ?>
</body>

</html>