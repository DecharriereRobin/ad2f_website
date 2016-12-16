<?php $this->layout('layoutBack', ['title' => 'Editer evenement '.$event['title']]) ?>

<?php $this->start('main_content') ?>

<?= $message /*Return message On success Or on Error*/ ?>

<br>

<button href="<?= $this->url('backoffice_EventList') ?>" class="center-block btn btn-info" type="button" placeholder="retour"> Retour à la liste des évenements</button><br />

<form action="<?php $this->url('backoffice_EventEdit', ['id' => $event['id']])?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group">
                <label class ="control-label" for="title">Titre de l'évenement: </label>
                <input id="title" name="title" type="text" class="center-block form-control" value="<?= $event['title']?> " /> 
            </div>
            <div class="form-group">
                <label class ="control-label" for="category">Catégorie</label>
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
            <br>
            <button class="btn btn-primary center-block" type="button" placeholder="Modifier" name="editEvent">Modifier l'évenement</button>
        </div>
    </div>
</form>
<?= $message ?>

<?php $this->stop('main_content') ?>