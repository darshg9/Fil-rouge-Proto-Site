<head>
    <title>FishBlock</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/main.css"/>

</head>
<header>
    <nav class="navbar navbar-default" style="margin:0px; padding:0px">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#LoginBar, #MainBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php" style='margin-left:0px'>
                    <img src="public/img/fish.png" style="max-width:60px">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="LoginBar" style="margin:0px">
                <ul class="nav navbar-nav navbar-right">
                    <form action="index.php" method="get" class="form-horizontal" role="form" style="margin:0px;">
                        <input type="text" name="name" placeholder="Identifiant">
                        <input type="text" name="name" placeholder="Mot de Passe">
                        <button class="btn btn-success" type="submit">
                            <div class="BoxFrameBtn" >
                                <p>
                                    Se Connecter
                                </p>
                            </div>
                        </button>
                    </form>
                    <a href="login.php" class="aButton" >
                        <div class="btn btn-info"style="width : 100%;" >
                            <div class="BoxFrameBtn">
                                <p>
                                    Créer un compte
                                </p>
                            </div>
                        </div>
                    </a>

                </ul>
            </div>
            <div class="collapse navbar-collapse" id="MainBar"  >
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Acceuil</a></li>
                    <li><a href="wall.php">Mon Wall</a></li>
                    <li><a href="serieList.php">Séries</a></li>
                    <li><a href="acteurList.php">Acteurs</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="moderation.php">Moderation</a></li>
                    <li><a href="advancedSearch.php">Recherche Avancée</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right ">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</header>