<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex3.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Terceiro exercício da ficha 3     *                                   
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
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
    </head>
    <body>
    <form class="formEx" name="Exercicio2" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1>Exercício 3</h1>
            <hr>
            <div class="center">
                <div class="align">
                    <label for="numero">Introduza um número <strong>natural:</strong></label>
                    <input class="input" type="number" name="nA">
                </div>
                <div class="align">
                    <label for="numero">Introduza outro número <strong>natural:</strong></label>
                    <input class="input" type="number" name="nB">
                </div>
            </div>
            <input class="botton" type="submit" value="Enviar dados">
    </form> 
    <?php
        if (isset($_REQUEST["nA"])){
            $nA = $_REQUEST["nA"];
            $nB = $_REQUEST["nB"];
            if ($nA > $nB){
                $aux = $nA;
                $nA = $nB;
                $nB = $aux;
                $i = $nA;
                $multi = 1;

                while ($i <= $nB) {
                    $multi = $multi*$i;
                    $i++; 
            }
            echo "<form class=\"formResp\">
                    <h2 class=\"resposta\">Resposta:</h2>
                    <hr>
                    <div class=\"center\">
                        <div class=\"align\">
                            <p>A multiplicação de todos os números naturais entre $nA e $nB é: $multi</p>
                        </div>
                    </div>
                 </form>";
            }
            else {
                $i = $nA;
                $multi = 1;
    
                while ($i <= $nB) {
                    $multi = $multi*$i;
                    $i++; 
                }
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                        <div class=\"center\">
                            <div class=\"align\">
                                <p>A multiplicação de todos os números naturais entre $nA e $nB é: $multi</p>
                            </div>
                        </div>
                     </form>";
            }
        }
            
    ?>
    </body>
</html