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
    <p> Pour trouver les cordonnées d'un lieu, vous pouvez utiliser le lieu suivant  <a target="_blank" href='http://www.coordonnees-gps.fr/'>lien</a></p>
        <div class="form-group">
            <label for="lat">lattitude :</label>
            <input id="lat" name="lat" type="text" class="form-control" placeholder="lattitude">
        </div>
        <div class="form-group">
            <label for="lng">Longitude :</label>
            <input id="lng" name="lng" type="text" class="form-control" placeholder="Longitude">
        </div>

        <div class="form-group">
            <label for="categorie">Catégorie</label>
            <select class="form-control" id="categorie" name="categorie">
                <option value="Lieux municipaux">Lieux municipaux</option>
                <option value="Restaurant">Restaurant</option>
                <option value="Sport">Sport</option>
            </select>
        </div>

        <button name="createPlace" class="btn btn-default">Ajouter un lieu</button>
    </form>


<?= $message ?>

<?php $this->stop('main_content') ?>
