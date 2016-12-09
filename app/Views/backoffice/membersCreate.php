<?php $this->layout('layout', ['title' => 'Ajouter user']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'ajout user -->

<form action="<?php $this->url('backoffice_MembersCreate') ?>" method="POST">
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
            <label for="phone">Téléphone :</label>
            <input id="phone" name="phone" type="phone">
        </div>
        <button name="createUser" >Ajouter</button>
    </form>

<?php $this->stop('main_content') ?>