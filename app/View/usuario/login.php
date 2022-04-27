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
                <img class="navbar-brand" src="../../imagem/Sin título-1.png"></img>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
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
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">

                    </div>
                    <div class="form-group">
                        
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="submit" class="btn btn-primary">Criar conta</button>
                </form>
            </div>
        </div>
    </div>




</body>

</html>