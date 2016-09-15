<?php
include_once './header.php';
?>
<body>
    <section>
        <div class="container" style="width : 60%;
             ">
            <h1>Créer un compte utilisateur</h1>
            <form action="index.php" class="form-horizontal" role="form">
                <div class="form-group row">
                    <label class="control-label col-sm-3">Nom :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" placeholder="Entrer Votre Nom">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Prénom :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="firstName" placeholder="Entrer Votre Prénom">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Adresse Mail :</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="mail" placeholder="Entrer Votre Adresse Mail">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Mot de Passe :</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Confirmation du Mot de Passe :</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="passwordConfirm" placeholder="Rentrer à nouveau votre mot de passe">
                    </div>
                </div>
                <button class="btn btn-success col-sm-offset-5 col-sm-4">
                    <div class="BoxFrameBtn">
                        Créer son Compte
                    </div>
                </button>
            </form>
        </div>

    </section>

</body>
<?php
include_once './footer.php';
?>
