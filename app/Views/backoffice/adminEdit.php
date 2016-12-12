<<<<<<< HEAD
<?php $this->layout('layoutBack', ['title' => 'Editer un administrateurs']) ?>
=======
<?php $this->layout('layout', ['title' => 'Admin EDIT']) ?>
>>>>>>> 48bc55b28745d2069a27cc8b5cc60cb7d0fcc92f

<?php $this->start('main_content') ?>

<!-- Formulaire d'edition d'un administateur -->

<form action="<?php $this->url('backoffice_AdminEdit', ['id' => $admin['id']]) ?>" method="POST">

        <div class="form-group">
            <label for="firstname">Nom :</label>
            <input value="<?= $admin['firstname'] ?>" id="firstname" name="firstname" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="lastname">Prenom :</label>
            <input value="<?= $admin['lastname'] ?>" id="lastname" name="lastname" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input value="<?= $admin['email'] ?>" id="email" name="email" type="email" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input id="password" name="password" type="password" class="form-control" >
        </div>
        <div class="form-group">
            <label for="cf-password">Confirmer Mot de passe :</label>
            <input id="cf-password" name="cf-password" type="password" class="form-control" value="Confirmer Mot de passe">
        </div>
        <button name="EditAdmin" class="btn btn-default" >Ajouter</button>
    </form>
    <?= $message ?>


<?php $this->stop('main_content') ?>
