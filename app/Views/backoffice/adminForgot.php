<?php $this->layout('layout', ['title' => 'Mot de passe oublié']) ?>

<?php $this->start('main_content') ?>


<form action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">

       </div class="form-group">
            <label for="email">Email :</label>
            <input id="email" name="email" type="email" class="form-control">
        </div>
        <button name="adminForgot" class="btn btn-default">recreer un nouveau mot de passe</button>
    </form>

<?= $message ?>

<?php $this->stop('main_content') ?>
