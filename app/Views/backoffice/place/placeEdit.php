<?php $this->layout('layoutBack', ['title' => 'Editer un lieu']) ?>
    <?php $this->start('main_content') ?>
        <!-- Formulaire d'edition d'un administateur -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                   <?= $message ?>
                    <form action="<?php $this->url('backoffice_PlaceEdit', ['id' => $place['id']]) ?>" method="POST">
                        <div class="text-center form-group">
                            <label for="titre"><h4>Titre : </h4></label>
                            <input value="<?= $place['titre'] ?>" id="titre" name="titre" type="text" class="text-center form-control"> </div>
                        <div class="text-center form-group">
                            <label for="content"><h4>Description : </h4></label>
                            <input value="<?= $place['content'] ?>" id="content" name="content" type="text" class="text-center form-control"> </div>
                        <div class="text-center form-group">
                            <label for="address"><h4>Adresse : </h4></label>
                            <input value="<?= $place['address'] ?>" id="address" name="address" type="text" class="text-center form-control"> </div>
                        <div class="text-center form-group">
                            <label for="categorie"><h4>Catégorie : </h4></label>
                            <select class="text-center form-control" id="categorie" name="categorie">
                                <option <?php echo $place[ 'categorie']=='Lieux municipaux' ? 'selected="selected' : NULL ?> value="Lieux municipaux">Lieux municipaux</option>
                                <option <?php echo $place[ 'categorie']=='Restaurant' ? 'selected="selected' : NULL ?>value="Restaurant">Restaurant</option>
                                <option <?php echo $place[ 'categorie']=='Sport' ? 'selected="selected' : NULL ?>value="Sport">Sport</option>
                            </select>
                        </div>
                        <button name="Editplace" class="btn btn-warning btn-sm center-block">Editer</button>
                    </form>
                </div>
            </div>
        </div>
        
            <?php $this->stop('main_content') ?>