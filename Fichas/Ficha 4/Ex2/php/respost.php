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
    $nome = $_REQUEST['nome'];
    $preco = $_REQUEST['preco'];
    $descricao = $_REQUEST['descricao'];

    echo '<div class="row">
            <div class="col"></div>
            <div class="col-5">
            <h1>'.$nome.'</h1>
            <p>'.$preco.'</p>
            <p>'.$descricao.'</p>
            </div>
            <div class="col"></div>
            </div>';
?>

    </main>
</body>

</html
