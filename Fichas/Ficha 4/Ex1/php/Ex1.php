d<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex1.php                    *
        * UC: P2                                       *
        * @author <Tiago Baptista>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Primeiro exercício da ficha 4     *                                   
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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>
</head>

<body>
    <header>
        <?php include('../inc/nav.inc.php');?>
    </header>
    <main>
    <?php
        if (isset($_GET["op"])) {
            $op = $_GET['op'];
            if ($op == 1){
                require("page2.php");
            }
            else if ($op == 2){
                require("page3.php");
            }
        }else{
            include('../inc/mainPage1.inc.php');
        }
        ?>
    </main>
</body>

</html