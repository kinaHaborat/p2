<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex6.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Seis exercício                   *                                   
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
</head>

<body>
    <h1>Exercício 6</h1>
    <form>
        <div name="Exercicio6" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="string">Introduza um valor: </label>
            <input type="string" name="string1"><br>
            <label for="string">Introduza outro valor: </label>
            <input type="string" name="string2">
            <input type="submit" value="Eniviar">
        </div>
        </div>
    </form>
    <?php
    if (isset($_REQUEST["string1"])) {
        if (isset($_REQUEST["string2"])) {
            $string1 = $_REQUEST["string1"];
            $string2 = $_REQUEST["string2"];
            if ($string1 == $string2) {
                echo "<h2 class=\"resposta\">Resposta:</h2>
                             <hr>
                             <div class=\"align\">
                                <p>O valor $string1 é igual ao valor $string2</p>
                             </div>";
            } else {
                echo "<h2 class=\"resposta\">Resposta:</h2>
                     <hr>
                     <div class=\"align\">
                        <p>O valor $string1 é diferente do valor $string2</p>
                     </div>";
            }
        }
    }
    ?>
</body>

</html