<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-light" style="background-color:#ffcbdb;">
        <div class="container-fluid">
            <div class="navbar-header">
                <img class="navbar-brand" src="../../imagem/img1.png"></img>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
            </ul>
           
            <form class="navbar-form navbar-left" action="/action_page.php" style="text-align: center;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="@usuario" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="formulario.php"><span class="glyphicon glyphicon-user"></span> Inscreva-se</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img class="rounded float-start" src="../../imagem/socialmedia.gif" class="rounded mx-auto d-block">
            </div>
            <div class="col-sm-6">
                <h1 style="color: beige; text-align:center;">FOTOLOGO</h1>
                <p>O FOTOLOGO ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
            </div>
        </div>
    </div>




</body>

</html>