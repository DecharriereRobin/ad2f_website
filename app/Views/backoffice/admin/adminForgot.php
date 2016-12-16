<?php $this->layout('layoutLogin', ['title' => "connexion des administateurs du site de l'association des deux faubourg"])?>
   
<?php $this->start('main_content') ?>

<br>

<h4>Inscrivez votre mail puis cliquez sur valider pour recevoir votre mot de passe par mail</h4>

<br>

<form action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST" class="form-horizontal">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group">
                <div class="col-sm-push-3 col-sm-4">
                    <label class ="control-label" for="email"></label>
                    <input id="email" name="email" type="email" class="center-block form-control" placeholder="Votre email de connexion"> </div>
            </div>
             <div class="form-group">
                <div class="col-sm-push-3 col-sm-4">
                    <button type="button" name="adminForgot" class="center-block btn btn-info" placeholder="recevoir">recevoir un mot de nouveau mot de passe</button></div>
            </div>
        </div>
    </div>
</form>
           <br>
        <br>
        <?= $message ?>
        <?php $this->stop('main_content') ?>