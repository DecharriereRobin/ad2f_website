<?php $this->layout('layoutLogin', ['title' => 'Vous avez oublié votre mot de passe ?']) ?>

<?php $this->start('main_content') ?>

<p>Entrer votre email, un e-mail pour créer un nouveau mot de passe va vous être envoyé</p>
<form action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">


       </div class="form-group">
            <label for="email">Email :</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="Votre email de connexion">
        </div>
        </br >
        <button name="adminForgot" class="btn btn-default">recreer un nouveau mot de passe</button>
    </form>
</br>

<?= $message ?>


<?php $this->stop('main_content') ?>
