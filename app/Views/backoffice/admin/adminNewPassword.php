<?php $this->layout('layoutLogin', ['title' => 'Créer un nouveau mot de passe']) ?>
    <?php $this->start('main_content') ?>
        <!-- Formulaire d'ajout administateur -->
        <p>Mot de passe: minimum 5 caractères</p>
        <form class="form-horizontal" action="<?php $this->url('backoffice_newpassword') ?>" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                        <div class="form-group">
                            <label class="control-label" for="password">Mot de passe :</label>
                            <input id="password" name="password" type="password" class="center-block form-control" placeholder="Mot de passe"> </div>
                        <label class="control-label col xs-4" for="cf-password">Confirmer Mot de passe :</label>
                        <input id="cf-password" name="cf-password" type="password" class="center-block form-control" placeholder="Confirmer confirmer votre de passe">
                        <div class="form-group">
                            <button type="button" name="createNewPaswword" class="center-block btn btn-success">Nouveau mot de passe</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>
        <?= $message ?>
            <?php $this->stop('main_content') ?>