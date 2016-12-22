<?php $this->layout('layoutBack', ['title' => 'Ajouter place']) ?>

<?php $this->start('main_content') ?>

<?= $message ?>

<?php if(!empty($errorMessages)){
    echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
}?>

<!-- Formulaire d'ajout de lieu-->

<form action="<?php $this->url('backoffice_placeCreate') ?>" method="POST">
        <div class="form-group <?php echo isset($hasError['titre']) ? $hasError['titre'] : ""  ?>">
            <label for="titre">Titre :</label>
            <input id="titre" name="titre" type="text" class="form-control" placeholder="titre" value="<?php echo isset($_POST['titre']) ? ($_POST['titre']) : "" ?>"/>
        </div>
        <div class="form-group <?php echo isset($hasError['content']) ? $hasError['content'] : ""  ?>">
            <label for="content">description :</label>
            <input id="content" name="content" type="text" class="form-control" placeholder="description" value="<?php echo isset($_POST['content']) ? ($_POST['content']) : "" ?>"/>
        </div>
        <div class="form-group <?php echo isset($hasError['address']) ? $hasError['address'] : ""  ?>">
            <label for="address">Adresse :</label>
            <input id="address" name="address" type="text" class="form-control" placeholder="Adresse" value="<?php echo isset($_POST['address']) ? ($_POST['address']) : "" ?>"/>
        </div>
    <p> Pour trouver les cordonnées d'un lieu, vous pouvez utiliser le lieu suivant  <a target="_blank" href='http://www.coordonnees-gps.fr/'>lien</a></p>
        <div class="form-group <?php echo isset($hasError['lat']) ? $hasError['lat'] : ""  ?>">
            <label for="lat">lattitude :</label>
            <input id="lat" name="lat" type="text" class="form-control" placeholder="lattitude" value="<?php echo isset($_POST['lat']) ? ($_POST['lat']) : "" ?>"/>
        </div>
        <div class="form-group <?php echo isset($hasError['lng']) ? $hasError['lng'] : ""  ?>">
            <label for="lng">Longitude :</label>
            <input id="lng" name="lng" type="text" class="form-control" placeholder="Longitude" value="<?php echo isset($_POST['lng']) ? ($_POST['lng']) : "" ?>"/>
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

<?php $this->stop('main_content') ?>
