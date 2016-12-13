<?php $this->layout('layout', ['title' => 'Login admin']) ?>

<?php $this->start('main_content') ?>

<form action="<?php $this->url('backoffice_AdminLogin') ?>" method="POST">

        <div class="form-group">
            <label for="email">Email :</label>
            <input  id="email" name="email" type="email" class="form-control">
        </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input id="password" name="password" type="password" class="form-control">
            </div>
        <button name="LoginAdmin" class="btn btn-default" >connexion</button>
        </br>
        <a href="forgot/" class="btn btn-default" >mot de passe oublié ?</a>


    </form>



<?php $this->stop('main_content') ?>
