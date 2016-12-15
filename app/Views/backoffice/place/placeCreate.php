<?php $this->layout('layoutBack', ['title' => 'Ajouter place']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'ajout de lieu-->

<form action="<?php $this->url('backoffice_placeCreate') ?>" method="POST">
        <div class="form-group">
            <label for="titre">Titre :</label>
            <input id="titre" name="titre" type="text" class="form-control" placeholder="titre">
        </div>
        <div class="form-group">
            <label for="content">description :</label>
            <input id="content" name="content" type="text" class="form-control" placeholder="description">
        </div>
        <div class="form-group">
            <label for="address">Adresse :</label>
            <input id="address" name="address" type="text" class="form-control" placeholder="Adresse">
        </div>
        <div class="form-group">
            <label for="categorie">categorie :</label>
            <input id="categorie" name="categorie" type="text" class="form-control" placeholder="categorie">
        </div>

        <button name="createPlace" class="btn btn-default">Ajouter un lieu</button>
    </form>


<?= $message ?>

<?php $this->stop('main_content') ?>
