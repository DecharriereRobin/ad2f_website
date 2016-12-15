<?php $this->layout('layoutBack', ['title' => 'Ajouter administateur']) ?>

<?php $this->start('main_content') ?>


<!-- Formulaire d'ajout administateur -->

<form action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">
        <div class="form-group">
            <label for="firstname">Nom :</label>
            <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="lastname">Prenom :</label>
            <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Prenom">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input id="password" name="password" type="password" class="form-control" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <label for="cf-password">Confirmer Mot de passe :</label>
            <input id="cf-password" name="cf-password" type="password" class="form-control" placeholder="Confirmer Mot de passe">
        </div>

        <button name="createAdmin" class="btn btn-default">Ajouter</button>

    </form>
     <a href="<?= $this->url('backoffice_AdminView') ?>">liste des administrateurs</a>
<?= $message ?>





<?php $this->stop('main_content') ?>
