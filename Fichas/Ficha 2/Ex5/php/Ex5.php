<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex5.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Cinco exercício                   *                                   
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
</head>

<body>
    <h1>Exercício 5</h1>
    <form>
        <div>
            <div name="Exercicio5" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="numero">Introduza um número <strong>inteiro positivo:</strong></label>
                <input type="number" min="0" name="num">
            </div>
        </div>
        <input type="submit" value="Enviar dados">
    </form>
    <?php
    if (isset($_REQUEST["num"])) {
        $n = $_REQUEST["num"];
        echo "<h2 class=\"resposta\">Resposta:</h2>
            <hr>
            <div class=\"center\">
                <div class=\"align\">
                    <p>Os números entre 0 e $n são:</p>
                </div>
            </div>";
        for ($i = 0; $i <= $n; $i++) {
            echo "$i &nbsp;";
        }
    }
    ?>
</body>

</html