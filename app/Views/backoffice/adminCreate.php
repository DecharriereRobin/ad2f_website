<?php $this->layout('layout', ['title' => 'Ajouter administateur']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'ajout administateur -->

<form action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">
        <div>
            <label for="firstname">Nom :</label>
            <input id="firstname" name="firstname" type="text">
        </div>
        <div>
            <label for="lastname">Prenom :</label>
            <input id="lastname" name="lastname" type="text">
        </div>
        <div>
            <label for="email">Email :</label>
            <input id="email" name="email" type="email">
        </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input id="password" name="password" type="password">
            </div>

        <button name="createAdmin" >Ajouter</button>
    </form>

    



<?php $this->stop('main_content') ?>
