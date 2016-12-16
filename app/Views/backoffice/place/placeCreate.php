<?php $this->layout('layoutBack', ['title' => 'Ajouter place']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'ajout de lieu-->
 <div class="container-fluid">
    <div class="row">
        <form action="<?php $this->url('backoffice_placeCreate') ?>" method="POST">
           <div class="col-sm-push-2 col-sm-4">
                <div class="form-group">
                    <label class ="control-label" for="titre">Titre :</label>
                    <input id="titre" name="titre" type="text" class="form-control" placeholder="titre">
                </div>
                <div class="form-group">
                    <label class ="control-label" for="content">description :</label>
                    <input id="content" name="content" type="text" class="form-control" placeholder="description">
                </div>
                <div class="form-group">
                    <label class ="control-label" for="address">Adresse :</label>
                    <input id="address" name="address" type="text" class="form-control" placeholder="Adresse">
                </div>
                <div class="form-group">
                    <label class ="control-label" for="categorie">Catégorie</label>
                    <select class="form-control" id="categorie" name="categorie">
                        <option value="braderie">Lieux municipaux</option>
                        <option value="carnaval">Restaurant</option>
                        <option value="Fete-de-quartier">Sport</option>
                    </select>
                </div>
                    <button class="center-block btn btn-primary" name="createPlace" class="btn btn-default">Ajouter un lieu</button>
            </div>
        </form>
    </div>
</div>


<?= $message ?>

<?php $this->stop('main_content') ?>
