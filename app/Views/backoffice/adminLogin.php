<?php $this->layout('layout', ['title' => 'Login admin']) ?>

<?php $this->start('main_content') ?>

<form action="<?php $this->url('backoffice_AdminLogin') ?>" method="POST">
        <div>
            <label for="email">Email :</label>
            <input  id="email" name="email" type="email">
        </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input id="password" name="password" type="password">
            </div>
        <button name="LoginAdmin" >connexion</button>
        </br>
        <a href="adminForgot" >mot de passe oublié ?</a>

    </form>

<?php $this->stop('main_content') ?>
