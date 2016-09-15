<?php include_once 'header.php'; ?>
<body>
    <section>
        <div class="row">
            <div class="col-sm-10">
                <!--/////////////////********|Titre|********\\\\\\\\\\\\\\\\\!-->
                <div class="row flexrow">
                    <div class="col-sm-offset-2 col-sm-4">
                        <h1>Liste des Acteurs</h1>
                    </div>
                    <div class="col-sm-4 ">
                        <a href="login.php" class="aButton pull-right" >
                            <div class="btn btn-info">
                                <div class="BoxFrameBtn">
                                    <p>Proposer un Acteur</p>
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
                <!--/////////////////********|Liste des Acteurs|********\\\\\\\\\\\\\\\\\!-->
                <div class='flexrow' style='justify-content:  center;'>
                    <div class="smallBox" style='background-image: url("http://www.virabuz.com/wp-content/uploads/2016/06/Emilia-Clarke-Hair.jpg");background-size: cover;background-repeat: no-repeat;background-position-x: 50%;'>
                        <a href="acteurDetail.php">
                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexrow" style="text-shadow: 2px 2px black;justify-content:  flex-end;">
                                    <h2 style="padding:3px; align-self: flex-end">Emilia Clark</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="smallBox" style='background-image: url("https://dolphinproject.net/wp-content/uploads/2015/03/23-Maisie-Williams-Getty.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="acteurDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Maisie Williams</h1>
                                </div>
                            </div>
                    </div>
                    <div class="smallBox" style='background-image: url("https://upload.wikimedia.org/wikipedia/commons/a/aa/Kit_Harington_June_2014.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="acteurDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Kit Harington</h1>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="smallBox" style='background-image: url("http://officialtravisfimmel.com/travis/wp-content/uploads/2013/04/Travis-Fimmel-GHR-000418.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="acteurDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Travis Fimmel</h1>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="smallBox" style='background-image: url("http://t3.gstatic.com/images?q=tbn:ANd9GcQA5pLApmbCS2qoteKAFLgXRykrjcIUGmk9FCXJm_vs9LjO0sxWukizXTM");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="acteurDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Katheryn Winnick</h1>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="smallBox" style='background-image: url("http://www.gannett-cdn.com/-mm-/1143bfb43604d503c580e0fcf7b4d4e423d34541/c=0-116-2574-2051&r=x404&c=534x401/local/-/media/USATODAY/USATODAY/2014/03/25//1395723632000-alenxander.jpg");background-size: cover;background-repeat: no-repeat;background-position-y: 25%;'>
                        <a href="acteurDetail.php">

                            <div class="BoxFrame" style=" height: 300px;">
                                <div class="BoxTitle flexcol" style="text-shadow: 2px 2px black;">
                                    <h1>Alexander Ludwig</h1>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <!--/////////////////********|Aside|********\\\\\\\\\\\\\\\\\!-->

            <div class="col-sm-2 Aside">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>Dernièrs acteurs ajoutées</p>
                    </div>
                    <div class="panel-body" style="padding:1px 0px 0px 0px; ">

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