<?php $this->layout('layoutBack', ['title' => 'Editer evenement '.$event['title']]) ?>

<?php $this->start('main_content') ?>


<?= $message /*Return message On success Or on Error*/ ?>

<div class="col-md-9 col-lg-11 text-center">
    <a href="<?= $this->url('backoffice_EventList') ?>" class="btn btn-info btn-md"> Retour à la liste des évenements</a><br />
</div>

<div class="col-md-9 col-lg-11">
    <form action="<?php $this->url('backoffice_EventEdit', ['id' => $event['id']])?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Titre de l'évenement: </label>
            <input id="title" name="title" type="text" class="form-control" value="<?= $event['title']?> " /> 
        </div>
        <div class="form-group">
            <label for="category">Catégorie</label>
            <select class="form-control" id="category" name="category">
                <option <?php echo $event['category']== 'braderie' ?'selected="selected' : NULL ?> value="braderie">Braderie</option>
                <option <?php echo $event['category']== 'carnaval' ?'selected="selected' : NULL ?>value="carnaval">Carnaval</option>
                <option <?php echo $event['category']== 'Fete-de-quartier' ?'selected="selected' : NULL ?>value="Fete-de-quartier">Fete de quartier</option>
            </select>
        </div>
        <div class="form-group">
            <label for="content">Description</label>
            <textarea id="content" name="content" class="form-control" rows="12"><?= $event['content']?></textarea>
        </div>
        <div class="form-group">
            <?php $dateTime = $event['date']?>
                <label for="date">Date </label>
                <input id="datepicker" name="date" type="text" class="form-control calendar" value="<?= $dateTime ?>" />
        </div>
        <div class="form-group text-center">
                <?= !empty($eventImage) ? '<h5 class="text-center"><strong>Image actuelle</strong></h5> <img src =" ../../../..'.$eventImage['path'].'" alt ="..."  class="img-responsive center-block" style="width:50%;"/>' : '' ?><br />
                
                <label class="btn btn-primary active btn-sm btn-block" for="file"><input type="file" name="file" id="file" accept="image/*"  style="display:none;" /><i class="glyphicon glyphicon-camera"></i> Modifier ou ajouter une image à l'événement</label>
                <span class='label label-warning' id="upload-file-info"></span>

        </div>
        <div class="center-block">
            <img id="thumbnail" style="display:none;"/>
        </div>
        <div class="text-center">
            <button class="btn btn-success" name="editEvent">Mettre à jour l'évenement</button>
        </div>
    </form>
</div>


<?php $this->stop('main_content') ?>
