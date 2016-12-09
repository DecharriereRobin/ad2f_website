<?php $this->layout('layoutBack', ['title' => 'Editer evenement '.$event['title']]) ?>

<?php $this->start('main_content') ?>

<!-- Return Modification message On success Or Error--> 
<?= $message ?>
<?php var_dump($_POST); ?>
<form action="<?php $this->url('backoffice_EventEdit', ['id' => $event['id']])?>" method="POST">
    <div class="form-group">
        <label for="title">Modifier le titre de l'évenement: </label>
        <input id="title" name="title" type="text" class="form-control" value="<?= $event['title']?> " /> 
    </div>
    <div class="form-group">
        <label for="category">Catégorie</label>
        <select class="form-control" id="category" name="category[]">
            <option value="braderie">Braderie</option>
            <option value="carnaval">Carnaval</option>
            <option value="Fete-de-quartier">Fete de quartier</option>
        </select>
    </div>
    <div class="form-group">
        <label for="content">Modifier la description</label>
        <textarea id="content" name="content" class="form-control"><?= $event['content']?></textarea>
    </div>
    <div class="form-group">
        <?php $dateTime = $event['date']?>
            <label for="date">Date </label>
            <input id="date" name="date" type="date" class="form-control calendar" value="<?= $dateTime ?>" /> 
    </div>
    <button class="btn btn-default" name="editEvent">Modifier l'évenement</button>
</form>

<?php $this->stop('main_content') ?>
