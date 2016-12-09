<?php $this->layout('layout', ['title' => 'Mot de passe oublié']) ?>

<?php $this->start('main_content') ?>


<form action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">

       </div>
            <label for="email">Email :</label>
            <input id="email" name="email" type="email">
        </div>
        <button name="Editpassword" href="adminForgot">recreer un nouveau mot de passe</button>
    </form>








<?php $this->stop('main_content') ?>
