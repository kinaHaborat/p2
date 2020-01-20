<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex2.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Segundo exercício da ficha 3      *                                   
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
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
    </head>
    <body>
    <form class="formEx" name="Exercicio2" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1>Exercício 2</h1>
            <hr>
            <div class="center">
                <div class="align">
                    <label for="numero">Introduza um número :</label>
                    <input class="input" type="number" name="nA">
                </div>
                <div class="align">
                    <label for="numero">Introduza outro número :</label>
                    <input class="input" type="number" name="nB">
                </div>
            </div>
            <input class="botton" type="submit" value="Enviar dados">
    </form> 
    <?php
        if (isset($_REQUEST["nA"])){
            $nA = $_REQUEST["nA"];
            $nB = $_REQUEST["nB"];
            $aux = 0;
            $conta = 0;
            
            if ($nA>$nB) {
                $aux = $nA;
                $nA = $nB;
                $nB = $aux;
                $i = 0;
                $numerosPares = array();
                
                for ($it = $nA; $it <= $nB; $it++) { 
                    $conta = $it % 2;
                    if ($conta == 0) {
                        $numerosPares[$i] = $it;
                        $i = $i +1;
                        
                    }
                }
                echo "<form class=\"formResp\">
                    <h2 class=\"resposta\">Resposta:</h2>
                    <hr>
                    <div class=\"center\">
                        <div class=\"align\">
                            <p>Os números pares entre $nA e $nB são: ".$numerosPares[$i]."</p>
                        </div>
                    </div>
                </form>";
            }
            else {
                $i = 0;
                for ($it = $nA; $it <= $nB; $it++) { 
                    $conta = $it % 2;
                    if ($conta == 0) {
                        $numerosPares[$i] = $it;
                        $i = $i +1;   
                    }
                }
                
            }
        }
        else {
            echo "<form class=\"formResp\">
                    <h2 class=\"resposta\">Resposta:</h2>
                    <hr>
                    <div class=\"center\">
                        <div class=\"align\">
                            <p>Introduza os números solicitados.</p>
                        </div>
                    </div>
                </form>";
        }
    ?>
    </body>
  </html