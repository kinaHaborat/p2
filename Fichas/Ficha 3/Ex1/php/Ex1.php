<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex1.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Primeiro exercício da ficha 3     *                                   
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
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>
    <body>
    <form class="formEx" name="Exercicio2" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1>Exercício 1</h1>
            <hr>
            <div class="center">
              <div class="align">
                <label for="numero">Introduza um valor de 1 a 12:</label>
                <input class="input" type="number" name="nMes">
              </div>
            </div>
            <input class="botton" type="submit" value="Enviar dados">
    </form> 
    <?php
        if (isset($_REQUEST["nMes"])){
            $nMes = $_REQUEST["nMes"];

                switch ($nMes) {
                    case '1':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Janeiro!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '2':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Fevereiro!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '3':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Março!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '4':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Abril!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '5':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Maio!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '6':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Junho!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '7':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Julho!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '8':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Agosto!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '9':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Setembro!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '10':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Outubro!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '11':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Nuvembro!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    case '12':
                    echo "<form class=\"formResp\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                             <div class=\"center\">
                                <div class=\"align\">
                                    <p>O número $nMes corresponde ao mês de Dezembro!</p>
                                </div>
                            </div>
                        </form>";
                        break;
                    
                    default:
                        echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                        <div class=\"center\">
                            <div class=\"align\">
                                <p>ERRO! Introduza um numero de 1 a 12.</p>
                            </div>
                        </div>
                    </form>";
                        break;
                }
            /*echo "<form class=\"formResp\"><h2 class=\"resposta\">Resposta:</h2><hr></form>";*/
        }               
    ?>
    </body>
</html