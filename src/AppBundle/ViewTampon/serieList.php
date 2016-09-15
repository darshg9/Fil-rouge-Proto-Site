<?php include_once 'header.php'; ?>
<body>
    <section>
        <div class="row">
            <div class="col-sm-10">
                <!--/////////////////********|Titre|********\\\\\\\\\\\\\\\\\!-->
                <div class="row flexrow">
                    <div class="col-sm-offset-2 col-sm-4">
                        <h1>Liste des séries</h1>
                    </div>
                    <div class="col-sm-4 ">
                        <a href="login.php" class="aButton pull-right" >
                            <div class="btn btn-info">
                                <div class="BoxFrameBtn">
                                    <p>Proposer une série</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <hr>
                <!--/////////////////********|Bar de recherche|********\\\\\\\\\\\\\\\\\!-->
                <div>
                    <div class="flexcol">
                        <div class="flexrow" style="justify-content:  center;">
                            <form method='get' action='' class='form-inline flexrow' style='align-items:  center;justify-content:  space-between;
                                  width : 80%;'>

                                <div class="form-group">
                                    <label for="sel1">Trié par : </label>
                                    <select class="form-control" id="sel1">
                                        <option>Genre</option>
                                        <option>Popularité</option>
                                        <option>Status</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Entrer un mot clé">

                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </div>
                                    </div>
                                </div>
                                <button class="BoxFrameBtn btn-success" type='submit'>
                                    <p>Chercher</p>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/////////////////********|Liste des sériees|********\\\\\\\\\\\\\\\\\!-->
                <div class='flexrow' style='justify-content:  center;'>
                    <div class="smallBox" style='background-image: url("https://pmctvline2.files.wordpress.com/2016/06/mr-robot-season-2-after-show.jpg?w=620");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="serieDetail.php">
                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Viking</h1>
                                    <p style='margin-left: 50px;flex:50%'>Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                        ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        neque, a vulputate velit. Phasellus finibus
                                    </p>
                                    <p style="padding:3px">Genre : </p>
                                    <p style="padding:3px">Note :</p>
                                    <p style="padding:3px">Popularité</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="smallBox" style='background-image: url("http://s.newsweek.com/sites/www.newsweek.com/files/styles/embed-lg/public/2016/02/12/data-broadband-download-record-game-thrones.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="serieDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Viking</h1>
                                    <p style='margin-left: 50px;flex:50%'>Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                        ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        neque, a vulputate velit. Phasellus finibus
                                    </p>
                                    <p style="padding:3px">Genre : </p>
                                    <p style="padding:3px">Note :</p>
                                    <p style="padding:3px">Popularité</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="smallBox" style='background-image: url("http://s.newsweek.com/sites/www.newsweek.com/files/styles/embed-lg/public/2016/02/12/data-broadband-download-record-game-thrones.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="serieDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Viking</h1>
                                    <p style='margin-left: 50px;flex:50%'>Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                        ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        neque, a vulputate velit. Phasellus finibus
                                    </p>
                                    <p style="padding:3px">Genre : </p>
                                    <p style="padding:3px">Note :</p>
                                    <p style="padding:3px">Popularité</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="smallBox" style='background-image: url("https://pmctvline2.files.wordpress.com/2016/06/mr-robot-season-2-after-show.jpg?w=620");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="serieDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Viking</h1>
                                    <p style='margin-left: 50px;flex:50%'>Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                        ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        neque, a vulputate velit. Phasellus finibus
                                    </p>
                                    <p style="padding:3px">Genre : </p>
                                    <p style="padding:3px">Note :</p>
                                    <p style="padding:3px">Popularité</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="smallBox" style='background-image: url("http://s.newsweek.com/sites/www.newsweek.com/files/styles/embed-lg/public/2016/02/12/data-broadband-download-record-game-thrones.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="serieDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Viking</h1>
                                    <p style='margin-left: 50px;flex:50%'>Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                        ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        neque, a vulputate velit. Phasellus finibus
                                    </p>
                                    <p style="padding:3px">Genre : </p>
                                    <p style="padding:3px">Note :</p>
                                    <p style="padding:3px">Popularité</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="smallBox" style='background-image: url("http://s.newsweek.com/sites/www.newsweek.com/files/styles/embed-lg/public/2016/02/12/data-broadband-download-record-game-thrones.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="serieDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Viking</h1>
                                    <p style='margin-left: 50px;flex:50%'>Vivamus a varius augue. Donec non venenatis lectus. Mauris at porta felis. Quisque ac
                                        ultricies risus. Vestibulum non nibh sit amet massa luctus scelerisque. Nam ac efficitur
                                        neque, a vulputate velit. Phasellus finibus
                                    </p>
                                    <p style="padding:3px">Genre : </p>
                                    <p style="padding:3px">Note :</p>
                                    <p style="padding:3px">Popularité</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-sm-2 Aside">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>Dernières séries ajoutées</p>
                    </div>
                    <div class="panel-body" style="padding:1px 0px 0px 0px; ">

                        <!--/////////////////********|Liste Dernières série|********\\\\\\\\\\\\\\\\\!-->
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-info">
                                <div class="flexrow" style="align-items:  center; justify-content: space-around;
                                     ">
                                    <div style="max-width: 30%;">
                                        <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcRY1t4XoXCwsFcxJzH8u8rg1EYkwEy1MSBVScHOTLKsQFBJkXQNCNS4"/>
                                    </div>
                                    <div style="width : 70%;
                                         ">
                                        First item
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
                                        First item
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
                                        First item
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
                                        First item
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
                                        First item
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
</body>