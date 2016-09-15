<?php include_once 'header.php'; ?>
<body>
    <section>
        <div class="row ">

            <div class="col-sm-10">
                <div class="row">
                    <!--/////////////////********|Image and Rating|********\\\\\\\\\\\\\\\\\!-->
                    <div class="col-sm-7">
                        <img src="http://www.virabuz.com/wp-content/uploads/2016/06/Emilia-Clarke-Hair.jpg" class="img-responsive" alt="Cinque Terre">
                    </div>
                    <!--/////////////////********| Description Série|********\\\\\\\\\\\\\\\\\!-->
                    <div class=" col-sm-5 flexcol" >
                        <div class="detailTitle flexrow" style="justify-content: space-between; padding:20px; align-items:  center;">
                            <h1>Emilia Clark</h1>
                            <div>
                                <div class="btn btn-warning" >
                                    <div class="BoxFrameBtn " >
                                        <p>Modifier</p>
                                    </div>
                                </div>
                                <div class="btn btn-danger" >
                                    <div class="BoxFrameBtn " >
                                        <p>Supprimer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detailDescription">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Date de naissance :</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Nationalité :</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/////////////////********|Resumé|********\\\\\\\\\\\\\\\\\!-->
                <div class="panel panel-default" style="margin:20px" >
                    <div class="panel-heading">Content</div>
                    <div class="panel-body" >
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < 8; $i++)
                                    {
                                        ?>
                                        <tr>
                                            <td>Année</td>
                                            <td></td>
                                            <td>Titre de série</td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
                                <a data-toggle="collapse" href="#saison1">Ses séries les plus populaires</a>
                            </h4>
                        </div>
                        <div id="saison1" class="panel-collapse collapse ">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="episodeDetail.php">Série 1</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Série 2</a></li>
                                <li class="list-group-item"><a href="episodeDetail.php">Série 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/////////////////********|Saison 2|********\\\\\\\\\\\\\\\\\!-->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title ">
                                <a data-toggle="collapse" href="#saison2">Ses collaborations les plus fréquentes</a>
                            </h4>
                        </div>
                        <div id="saison2" class="panel-collapse collapse ">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="acteurDetail.php">Acteur 1</a></li>
                                <li class="list-group-item"><a href="acteurDetail.php">Acteur 2</a></li>
                                <li class="list-group-item"><a href="acteurDetail.php">Acteur 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/////////////////********|End Panel|********\\\\\\\\\\\\\\\\\!-->
                </div>
            </div>
        </div>

    </div>
</section>

</body>