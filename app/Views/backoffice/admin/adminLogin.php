<?php $this->layout('layoutLogin', ['title' => "connexion des administateurs du site de l'association des deux faubourg"]) ?>

<?php $this->start('main_content') ?>

<form action="<?php $this->url('backoffice_AdminLogin') ?>" method="POST">

        <div class="form-group">
            <label for="email">Email :</label>
            <input  id="email" name="email" type="email" class="form-control" placeholder="Votre email de connexion">
        </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input id="password" name="password" type="password" class="form-control">
            </div>
        <button name="LoginAdmin" class="btn btn-default" placeholder="Votre mot de passe de connexion">connexion</button>

        <a href="forgot" class="btn btn-default" >mot de passe oublié ?</a>


    </form>
    <?= $message ?>



<?php $this->stop('main_content') ?>
