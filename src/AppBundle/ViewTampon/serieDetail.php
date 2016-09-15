<?php include_once 'header.php'; ?>
<body>
    <section>
        <div class="row ">

            <div class="col-sm-10">
                <div class="row">
                    <!--/////////////////********|Image and Rating|********\\\\\\\\\\\\\\\\\!-->
                    <div class="col-sm-7">
                        <img src="http://1.bp.blogspot.com/-PhfyECtnhG8/UyDjIDsrfbI/AAAAAAAACEg/0ybZKzXz6BA/s1600/daenerys+targaryen,+a+game+of+thrones,+dragon+169643.jpg" class="img-responsive" alt="Cinque Terre">
                        <div class=" Rating flexcol" style="align-items:  center;" >
                            <div class="flexrow" style="justify-content:  center;width : 100%;
                                 ">
                                <div style="width : 80px;">
                                    <input type="number" class="form-control" name="rating">
                                </div>
                                <div>
                                    <input type="submit" value="Voté" class="form-control">
                                </div>
                            </div>

                            <div class="flexcol" style="align-items:  center;
                                 ">
                                <div class="Star flexrow" style="flex-wrap: nowrap">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </div>
                                <h3>4/5</h3>

                            </div>

                        </div>
                    </div>
                    <!--/////////////////********| Description Série|********\\\\\\\\\\\\\\\\\!-->
                    <div class=" col-sm-5 flexcol" >
                        <div class="detailTitle flexrow" style="justify-content: space-between; padding:20px; align-items:  center;">
                            <h1>Game of Thrones</h1>
                            <div>
                                <div class="btn btn-info" >
                                    <div class="BoxFrameBtn " >
                                        <p>S'abonner à la Série</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detailDescription">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#Descriptif">Description</a></li>
                                <li><a data-toggle="tab" href="#Acteurs">Acteurs</a></li>
                            </ul>

                            <div class="tab-content" style="padding:10px">
                                <!--/////////////////********|Descriptif|********\\\\\\\\\\\\\\\\\!-->
                                <div id="Descriptif" class="tab-pane fade in active">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Réalisateur :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Pays :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Année de début :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Status :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nombre de saisons :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nombre d'épisodes :</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--/////////////////********|Acteurs|********\\\\\\\\\\\\\\\\\!-->
                                <div id="Acteurs" class="tab-pane fade">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Nom Prénom</td>
                                                </tr>
                                                <tr>
                                                    <td>Nom Prénom</td>
                                                </tr>
                                                <tr>
                                                    <td>Nom Prénom</td>
                                                </tr>
                                                <tr>
                                                    <td>Nom Prénom</td>
                                                </tr>
                                                <tr>
                                                    <td>Nom Prénom</td>
                                                </tr>
                                                <tr>
                                                    <td>Nom Prénom</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!--/////////////////********|Synopsy|********\\\\\\\\\\\\\\\\\!-->
                <div class="panel-group">
                    <div class="panel panel-success">
                        <div class="panel-heading">Synopsy</div>
                        <div class="panel-body">
                            Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                            ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                            neque, a vulputate velit. Phasellus finibus risus semper felis blandit rutrum. Aenean
                            viverra venenatis viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Maecenas ut pretium dui, nec cursus velit. Suspendisse non lorem urna.
                            Nulla facilisi. Fusce aliquam et elit quis lacinia.Nam lacinia nunc sapien, ut vehicula est
                            iaculis iaculis. Etiam porttitor sed nulla dictum mollis.
                        </div>
                    </div>
                </div>
            </div>
            <!--/////////////////********|Aside Right|********\\\\\\\\\\\\\\\\\!-->
            <div class="col-sm-2 Aside ">
                <div class="panel-group">
                    <!--/////////////////********|Saison 1|********\\\\\\\\\\\\\\\\\!-->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title ">
                                <a data-toggle="collapse" href="#saison1">Saison 1</a>
                            </h4>
                        </div>
                        <div id="saison1" class="panel-collapse collapse ">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 1</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 2</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/////////////////********|Saison 2|********\\\\\\\\\\\\\\\\\!-->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title ">
                                <a data-toggle="collapse" href="#saison2">Saison 2</a>
                            </h4>
                        </div>
                        <div id="saison2" class="panel-collapse collapse ">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 1</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 2</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/////////////////********|Saison 3|********\\\\\\\\\\\\\\\\\!-->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title ">
                                <a data-toggle="collapse" href="#saison3">Saison 3</a>
                            </h4>
                        </div>
                        <div id="saison3" class="panel-collapse collapse ">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 1</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 2</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Episode 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/////////////////********|End Panel|********\\\\\\\\\\\\\\\\\!-->
                </div>
            </div>
        </div>
        <!--/////////////////********|Critiques|********\\\\\\\\\\\\\\\\\!-->
        <div class="panel-group">
            <div class="panel panel-success">
                <div class="panel-heading">Critique</div>
                <div class="panel-body">
                    <div class="panel-group">
                        <!--/////////////////********|Un Commentaire|********\\\\\\\\\\\\\\\\\!-->
                        <div class="panel panel-default">
                            <div class="panel-heading">Auteur : Pseudonyme</div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <span class="glyphicon glyphicon-user" style="font-size: 100px;"></span>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="flexrow" style="justify-content:  space-between; align-items:  center;
                                             ">
<!--                                                    <p class="">Critique :</p>-->
                                            <div class="flexrow" style='flex-wrap: nowrap;  align-items:  center;justify-content:  space-around;'>
                                                <p style="padding:5px">Note critique : +5</p>
                                                <div class="btn btn-success">
                                                    <div class="BoxFrameBtn " style="padding:5px">
                                                        <p>J'aime</p>
                                                    </div>
                                                </div>
                                                <div class="btn btn-warning" >
                                                    <div class="BoxFrameBtn " style="padding:5px" >
                                                        <p>J'aime pas</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <p style="padding:10px">
                                            Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                            ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/////////////////********|Un Commentaire|********\\\\\\\\\\\\\\\\\!-->
                        <div class="panel panel-default">
                            <div class="panel-heading">Auteur : Pseudonyme</div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <span class="glyphicon glyphicon-user" style="font-size: 100px;"></span>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="flexrow" style="justify-content:  space-between; align-items:  center;
                                             ">
<!--                                                    <p class="">Critique :</p>-->
                                            <div class="flexrow" style='flex-wrap: nowrap;  align-items:  center;justify-content:  space-around;'>
                                                <p style="padding:5px">Note critique : -1</p>
                                                <div class="btn btn-success">
                                                    <div class="BoxFrameBtn " style="padding:5px">
                                                        <p>J'aime</p>
                                                    </div>
                                                </div>
                                                <div class="btn btn-warning" >
                                                    <div class="BoxFrameBtn " style="padding:5px" >
                                                        <p>J'aime pas</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <p style="padding:10px">
                                            Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                            ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/////////////////********|Un Commentaire|********\\\\\\\\\\\\\\\\\!-->
                        <div class="panel panel-default">
                            <div class="panel-heading">Auteur : Pseudonyme</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <span class="glyphicon glyphicon-user" style="font-size: 100px;"></span>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="flexrow" style="justify-content:  space-between; align-items:  center;
                                             ">
<!--                                                    <p class="">Critique :</p>-->
                                            <div class="flexrow" style='flex-wrap: nowrap;  align-items:  center;justify-content:  space-around;'>
                                                <p style="padding:5px">Note critique : +2</p>
                                                <div class="btn btn-success">
                                                    <div class="BoxFrameBtn " style="padding:5px">
                                                        <p>J'aime</p>
                                                    </div>
                                                </div>
                                                <div class="btn btn-warning" >
                                                    <div class="BoxFrameBtn " style="padding:5px" >
                                                        <p>J'aime pas</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <p style="padding:10px">
                                            Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                            ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</body>