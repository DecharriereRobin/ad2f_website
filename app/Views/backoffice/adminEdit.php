<?php $this->layout('layout', ['title' => 'Admin EDIT']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'edition d'un administateur -->

<form action="<?php $this->url('backoffice_AdminEdit', ['id' => $admin['id']]) ?>" method="POST">
        <div>
            <label for="firstname">Nom :</label>
            <input value="<?= $admin['firstname'] ?>" id="firstname" name="firstname" type="text">
        </div>
        <div>
            <label for="lastname">Prenom :</label>
            <input value="<?= $admin['lastname'] ?>" id="lastname" name="lastname" type="text">
        </div>
        <div>
            <label for="email">Email :</label>
            <input value="<?= $admin['email'] ?>" id="email" name="email" type="email">
        </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input id="password" name="password" type="password">
            </div>

        <button name="EditAdmin" >Ajouter</button>
    </form>

<?php $this->stop('main_content') ?>
