<?php include_once 'header.php'; ?>
<body>
    <section>
        <div class="row ">

            <div class="col-sm-10">
                <div class="row flexrow" style="justify-content:  center;">
                    <h1>Mon Wall</h1>
                </div>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#information">Informations </a></li>
                        <li><a data-toggle="tab" href="#activite">Activité</a></li>
                        <li><a data-toggle="tab" href="#commentaire">Commentaires</a></li>
                        <li><a data-toggle="tab" href="#commentaire2">Commentaires des autres utilisateurs</a></li>
                    </ul>

                    <div class="tab-content" style="padding:10px">
                        <!--/////////////////********|information|********\\\\\\\\\\\\\\\\\!-->
                        <div id="information" class="tab-pane fade in active">
                            <p>Theses informations will be generate with the autoform symfony</p>
                        </div>
                        <!--/////////////////********|activite|********\\\\\\\\\\\\\\\\\!-->
                        <div id="activite" class="tab-pane fade">
                            <div class="BoxFrame" style="margin:5px;">
                                <div class="row flexrow" style="min-height: 80px;
                                     align-items:  center; ">
                                    <div class="col-sm-3">
                                        <p style>Date et Heure</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Suit la série : <a href="#">Titre de la série</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="BoxFrame" style="margin:5px;">
                                <div class="row flexrow" style="min-height: 80px;
                                     align-items:  center; ">
                                    <div class="col-sm-3">
                                        <p style>Date et Heure</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>A commenté la série : <a href="#">Titre de la série</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="BoxFrame" style="margin:5px;">
                                <div class="row flexrow" style="min-height: 80px;
                                     align-items:  center; ">
                                    <div class="col-sm-3">
                                        <p style>Date et Heure</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>A proposé l'acteur : <a href="#">Titre de la série</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/////////////////********|commentaire|********\\\\\\\\\\\\\\\\\!-->
                        <div id="commentaire" class="tab-pane fade">

                            <div class="panel-group">
                                <div class="panel panel-success">
                                    <div class="panel-heading">Critique</div>
                                    <div class="panel-body">
                                        <div class="panel-group">
                                            <!--/////////////////********|Un Commentaire|********\\\\\\\\\\\\\\\\\!-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Date : 26/03/2016</div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <img class="img-responsive" src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4" style='max-width: 30vw'/>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="flexrow" style="justify-content:  space-between; align-items:  center;
                                                                 ">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/////////////////********|commentaireUtilisateur|********\\\\\\\\\\\\\\\\\!-->
                        <div id="commentaire2" class="tab-pane fade">

                            <div class="panel-group">
                                <div class="panel panel-success">
                                    <div class="panel-heading">Auteur : Nom Utilisateur</div>
                                    <div class="panel-body">
                                        <div class="panel-group">
                                            <!--/////////////////********|Un Commentaire|********\\\\\\\\\\\\\\\\\!-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Date : 26/03/2016</div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <img class="img-responsive" src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4" style='max-width: 30vw'/>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="flexrow" style="justify-content:  space-between; align-items:  center;
                                                                 ">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <!--/////////////////********|Aside Right|********\\\\\\\\\\\\\\\\\!-->
            <div class="col-sm-2 Aside ">
                <h3>Séries suivies par Moi</h3>
                <hr>
                <div class="panel-body" style="padding:1px 0px 0px 0px; ">

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            <div class="flexrow" style="align-items:  center; justify-content: space-around;
                                 ">
                                <div style="max-width: 30%;">
                                    <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4"/>
                                </div>
                                <div style="width : 70%;">
                                    Titre série
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            <div class="flexrow" style="align-items:  center; justify-content: space-around;
                                 ">
                                <div style="max-width: 30%;">
                                    <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4"/>
                                </div>
                                <div style="width : 70%;
                                     ">
                                    Titre série

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            <div class="flexrow" style="align-items:  center; justify-content: space-around;
                                 ">
                                <div style="max-width: 30%;">
                                    <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4"/>
                                </div>
                                <div style="width : 70%;
                                     ">
                                    Titre série

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            <div class="flexrow" style="align-items:  center; justify-content: space-around;
                                 ">
                                <div style="max-width: 30%;">
                                    <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4"/>
                                </div>
                                <div style="width : 70%;
                                     ">
                                    Titre série

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            <div class="flexrow" style="align-items:  center; justify-content: space-around;
                                 ">
                                <div style="max-width: 30%;">
                                    <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4"/>
                                </div>
                                <div style="width : 70%;
                                     ">
                                    Titre série

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

</body>

<?php
?>

