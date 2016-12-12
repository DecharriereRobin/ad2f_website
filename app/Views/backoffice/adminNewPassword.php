<?php $this->layout('layout', ['title' => 'Nouveau mot de passe']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'ajout administateur -->

<form action="<?php $this->url('backoffice_newpassword') ?>" method="POST">
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input id="password" name="password" type="password" class="form-control" value="Mot de passe">
        </div>
        <div class="form-group">
            <label for="cf-password">Confirmer Mot de passe :</label>
            <input id="cf-password" name="cf-password" type="password" class="form-control" value="Confirmer Mot de passe">
        </div>

        <button name="createNewPaswword" class="btn btn-default">Nouveau mot de pass</button>
    </form>
<?= $message ?>




<?php $this->stop('main_content') ?>
