<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex7.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Sete exercício                    *                                   
        ************************************************
        */
?>
<html>

<head>
    <meta charset="uft-8">
    <title>Ex7</title>
    <meta name="viewport" content="width=device-width, initial.scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <?php
    if (isset($_REQUEST["notaTes"])) {
        if (isset($_REQUEST["notaTrab"])) {
            if (isset($_REQUEST["notaPF"])) {
                $notaTes = $_REQUEST["notaTes"];
                $notaTrab = $_REQUEST["notaTrab"];
                $notaPF = $_REQUEST["notaPF"];
                echo "<h2>Resultado:</h2>
                        <hr>
                        <div>
                            <p>Nota do Teste: $notaTes valores</p>
                        </div>";
                echo "  <div>
                            <p>Nota do Trabalho: $notaTrab valores</p>
                        </div>";
                echo "  <div>
                            <p>Nota do Projeto Final: $notaPF valores</p>
                        </div>";
                Echo "  <hr><div>
                            <p>Nota Final do aluno é: ".(($notaTes*0.30)+($notaTrab*0.20)+($notaPF*0.50))." valores</p>
                        </div>";
            }
        }
    }
    ?>
</body>

</html>