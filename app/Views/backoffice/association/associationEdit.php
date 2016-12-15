<?php $this->layout('layoutBack', ['title' => 'Editer le profil de l association']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'edition d'un administateur -->

<form action="<?php $this->url('backoffice_AssociationEdit', ['id' => $association['id']]) ?>" method="POST">
        <div class="form-group">
            <label for="name">Nom de l'association:</label>
            <input value="<?= $association['name'] ?>" id="name" name="name" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="address">Adresse :</label>
            <input value="<?= $association['address'] ?>" id="address" name="address" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="ZIP_code">Code postale :</label>
            <input value="<?= $association['ZIP_code'] ?>" id="ZIP_code" name="ZIP_code" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="city">ville :</label>
            <input value="<?= $association['city'] ?>" id="city" name="city" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="phone">Telephone :</label>
            <input value="<?= $association['phone'] ?>" id="phone" name="phone" type="text" class="form-control" >
        </div>

        <button name="EditProfil" class="btn btn-default" >Editer</button>
    </form>
    <?= $message ?>

<?php $this->stop('main_content') ?>
