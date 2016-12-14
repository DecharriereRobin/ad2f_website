<?php $this->layout('layoutBack', ['title' => 'Editer un lieu']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'edition d'un administateur -->

<form action="<?php $this->url('backoffice_PlaceEdit', ['id' => $place['id']]) ?>" method="POST">

        <div class="form-group">
            <label for="titre">Titre :</label>
            <input value="<?= $place['titre'] ?>" id="titre" name="titre" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="content">description :</label>
            <input value="<?= $place['content'] ?>" id="content" name="content" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="address">adresse :</label>
            <input value="<?= $place['address'] ?>" id="address" name="address" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="categorie">Categorie :</label>
            <input value="<?= $place['categorie'] ?>" id="categorie" name="categorie" type="text" class="form-control" >
        </div>
        <button name="Editplace" class="btn btn-default" >Editer</button>
    </form>
    <?= $message ?>


<?php $this->stop('main_content') ?>
