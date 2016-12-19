<?php $this->layout('layoutLogin', ['title' => "connexion des administateurs du site de l'association des deux faubourg"])?>
    <?php $this->start('main_content') ?>
        <form action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST" class="form-horizontal">
            <div class="container-fluid">
                <div class="row">
                   <h4>Inscrivez votre mail puis cliquez sur valider pour recevoir votre mot de passe par mail</h4>
                    <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                        <br>
                        
                        <br>
                        <div class="form-group">
                            <label class="control-label" for="email"></label>
                            <input id="email" name="email" type="email" class="center-block " placeholder="Votre email de connexion"> </div>
                        <div class="form-group">
                            <button type="button" name="adminForgot" class="center-block btn btn-info" placeholder="recevoir">recevoir un mot de nouveau mot de passe</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>
        <?= $message ?>
            <?php $this->stop('main_content') ?>