<?php $this->layout('layoutBack', ['title' => 'Editer le profil de l association']) ?>
    <?php $this->start('main_content') ?>
        <!-- Formulaire d'edition d'un administateur -->
        <form action="<?php $this->url('backoffice_AssociationEdit', ['id' => $association['id']]) ?>" method="POST" class="form-horizontal">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label" for="name">Nom de l'association:</label>
                        <input value="<?= $association['name'] ?>" id="name" name="name" type="text" class="center-block form-control"> </div>
                    <div class="form-group">
                        <label class="control-label" for="address">Adresse :</label>
                        <input value="<?= $association['address'] ?>" id="address" name="address" type="text" class="center-block form-control"> </div>
                    <div class="form-group">
                        <label class="control-label" for="ZIP_code">Code postale :</label>
                        <input value="<?= $association['ZIP_code'] ?>" id="ZIP_code" name="ZIP_code" type="text" class="center-block form-control"> </div>
                    <div class="form-group">
                        <label class="control-label" for="city">ville :</label>
                        <input value="<?= $association['city'] ?>" id="city" name="city" type="text" class="center-block form-control"> </div>
                    <div class="form-group">
                        <label class="control-label" for="phone">Telephone :</label>
                        <input value="<?= $association['phone'] ?>" id="phone" name="phone" type="text" class="center-block form-control"> </div>
                    <div class="form-group">
                        <button type="button" name="EditProfil" class="center-block btn btn-success">Editer</button>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>
        <?= $message ?>
            <?php $this->stop('main_content') ?>