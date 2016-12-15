<?php $this->layout('layoutBack', ['title' => 'Editer evenement '.$event['title']]) ?>

<?php $this->start('main_content') ?>


<?= $message /*Return message On success Or on Error*/ ?>

<a href="<?= $this->url('backoffice_EventList') ?>" class="btn btn-info btn-xs"> Retour à la liste des évenements</a><br />

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
            <input id="date" name="date" type="date" class="form-control calendar" value="<?= $dateTime ?>" />
    </div>
    <button class="btn btn-primary" name="editEvent">Modifier l'évenement</button>
</form>
<?= $message ?>

<?php $this->stop('main_content') ?>
