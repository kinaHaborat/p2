<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Ex2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>
</head>

<body>
    <header>

    </header>
    <main>
        <br><br><br><br>
    <?php
    if (isset($_REQUEST['user'])) {
        if (isset($_REQUEST['pass'])) {
            $user = $_REQUEST['user'];
            $pass = $_REQUEST['pass'];
            $validUser = "teste";
            $validPass = "123";
            if ($user == $validUser) {
                if ($pass == $validPass) {
                    echo '<div class="row">
            <div class="col"></div>
            <div class="col-5">
            <h1>Autenticação realizada
            com sucesso!</h1>
            </div>
            <div class="col"></div>
            </div>';
                }else {
                    echo '<div class="row">
                <div class="col"></div>
                <div class="col-5">
                <h1>Erro! Palavra passe errada!</h1>
                </div>
                <div class="col"></div>
                </div>';
                }
            }else {
                echo '<div class="row">
                <div class="col"></div>
                <div class="col-5">
                <h1>Erro! utilizador errado!</h1>
                </div>
                <div class="col"></div>
                </div>';
            }
        }else {
            echo '<div class="row">
                <div class="col"></div>
                <div class="col-5">
                <h1>Erro! Introduza a palavra passe!</h1>
                </div>
                <div class="col"></div>
                </div>';
        }
    }else {
        echo '<div class="row">
                <div class="col"></div>
                <div class="col-5">
                <h1>Erro! Introduza o utilizador!</h1>
                </div>
                <div class="col"></div>
                </div>';
    }
?>

    </main>
</body>

</html
