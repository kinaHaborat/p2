<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex6.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: sexto exercício da ficha 3        *                                   
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Ex6</title>
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
                <label for="numero">Introduza um número <strong>aleatório:</strong></label>
                <input class="input" type="number" name="nA">
            </div>
            <div class="align">
                <label for="numero">Introduza um número <strong>aleatório (diferente do anterio):</strong></label>
                <input class="input" type="number" name="nB">
            </div>
            <div class="align">
                <label for="numero">Introduza um número <strong>aleatório (diferente dos anteriores):</strong></label>
                <input class="input" type="number" name="nC">
            </div>
            <div class="align">
                <label for="numero">Introduza um número <strong>aleatório (diferente dos anteriores):</strong></label>
                <input class="input" type="number" name="nD">
            </div>
            <div class="align">
                <label for="numero">Introduza um número <strong>aleatório (diferente dos anteriores):</strong></label>
                <input class="input" type="number" name="nE">
            </div>
        </div>
        <input class="botton" type="submit" value="Enviar dados">
    </form>
    <?php
    if (isset($_REQUEST["nA"])) {
        $ordemEntrada = array($_REQUEST["nA"], $_REQUEST["nB"], $_REQUEST["nC"], $_REQUEST["nD"], $_REQUEST["nE"]);
        echo "<form class=\"formResp\">
                <h2 class=\"resposta\">Resposta:</h2>
                <hr>
                <div class=\"center\">
                    <div class=\"align\">
                        <p>Números pela ordem de Entrada: $ordemEntrada[0], $ordemEntrada[1], $ordemEntrada[2], $ordemEntrada[3], $ordemEntrada[4].</p>
                    </div>
                </div>
             </form>";
        rsort($ordemEntrada);
        echo "<form class=\"formResp\">
                <div class=\"center\">
                    <div class=\"align\">
                        <p>Números pela ordem de Decrescente: $ordemEntrada[0], $ordemEntrada[1], $ordemEntrada[2], $ordemEntrada[3], $ordemEntrada[4].</p>
                    </div>
                </div>
             </form>";
    } else {
        echo "<form class=\"formResp\">
                <h2 class=\"resposta\">Resposta:</h2>
                <hr>
                <div class=\"center\">
                    <div class=\"align\">
                        <p>Erro! Por favor preencha todos os campos!</p>
                    </div>
                </div>
             </form>";
    }
    ?>
</body>

</html>