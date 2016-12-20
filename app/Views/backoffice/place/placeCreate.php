<?php $this->layout('layoutBack', ['title' => 'Ajouter place']) ?>
    <?php $this->start('main_content') ?>
        <!-- Formulaire d'ajout de lieu-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                 <?= $message ?>
                 <button type="button" onclick="window.location.href =' <?= $this->url('backoffice_placeView') ?>'" class="btn btn-info btn-sm center-block">Retour à la liste des lieux</button><br>
        <form method="POST">
            <div class="text-center form-group">
                <label for="titre">Titre :</label>
                <input id="titre" name="titre" type="text" class="text-center form-control" placeholder="titre"> </div>
            <div class="text-center form-group">
                <label for="content">description :</label>
                <input id="content" name="content" type="text" class="text-center form-control" placeholder="description"> </div>
            <div class="text-center form-group">
                <label for="address">Adresse :</label>
                <input id="address" name="address" type="text" class="text-center form-control" placeholder="Adresse"> </div>
            <p> Pour trouver les cordonnées d'un lieu, vous pouvez utiliser le lieu suivant <a href='http://www.coordonnees-gps.fr/'>lien</a></p>
            <div class="text-center form-group">
                <label for="lat">lattitude :</label>
                <input id="lat" name="lat" type="text" class="text-center form-control" placeholder="lattitude"> </div>
            <div class="text-center form-group">
                <label for="lng">Longitude :</label>
                <input id="lng" name="lng" type="text" class="text-center form-control" placeholder="Longitude"> </div>
            <div class="text-center form-group">
                <label for="categorie">Catégorie</label>
                <select class="form-control" id="categorie" name="categorie">
                    <option value="Lieux municipaux">Lieux municipaux</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Sport">Sport</option>
                </select>
            </div><button name="createPlace" class="btn btn-success btn-sm center-block">Ajouter un lieu</button>
                    </form></div></div></div>
       
            <?php $this->stop('main_content') ?>
            
           
          
                 