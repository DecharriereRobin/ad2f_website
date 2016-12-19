<?php $this->layout('layoutLogin', ['title' => "connexion des administateurs du site de l'association des deux faubourg"]) ?>
    <?php $this->start('main_content') ?>
        <form class="form-horizontal" action="<?php $this->url('backoffice_AdminLogin') ?>" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                        <div class="form-group">
                            <label class="control-label col-xs-4 sm-4 md-4" for="email">Email :</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="Votre email de connexion"> </div>
                        <div class="form-group">
                            <label class="control-label col xs-4" for="password">Mot de passe :</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Votre password de connexion"> </div>
                        <button name="LoginAdmin" class="btn btn-info btn-sm" placeholder="Votre mot de passe de connexion">Connexion</button>
                         <a href="forgot" class="btn btn-success btn-sm" >mot de passe oublié ?</a>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>
        <?= $message ?>
            <?php $this->stop('main_content') ?>