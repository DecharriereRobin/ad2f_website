<?php $this->layout('layoutBack', ['title' => 'Creer un évenement']) ?>

<?php $this->start('main_content') ?>
 
<?= $message ?>

<?php if(!empty($errorMessages)){
    echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
    echo '<a href="<?= $this->url(\'backoffice_EventDelete\') ?>" class="btn btn-danger"> Retour à la liste des évenements</a>';
}?>

<a href="<?= $this->url('backoffice_EventList') ?>" class="btn btn-info btn-xs"> Retour à la liste des évenements</a><br />

<form action="<?php $this->url('backoffice_EventCreate')?>" method="POST" enctype="multipart/form-data">
    
    <div class="form-group <?php echo isset($hasError['title']) ? $hasError['title'] : ""  ?>">
        <label for="title">Titre </label>
        <input id="title" name="title" type="text" class="form-control" placeholder="Titre de l'évenement" value="<?php echo isset($_POST['title']) ? ($_POST['title']) : "" ?>"/> 
    </div>
    
    <div class="form-group">
        <label for="category">Catégorie</label>
        <select class="form-control" id="category" name="category">
            <option value="braderie">Braderie</option>
            <option value="carnaval">Carnaval</option>
            <option value="Fete-de-quartier">Fete de quartier</option>
        </select>
    </div>
    
    <div class="form-group <?php echo isset($hasError['content']) ? $hasError['content'] : ""  ?>">
        <label for="content">Description</label>
        <textarea id="content" name="content" class="form-control" rows="12" placeholder="Description complète de l'évenement" ><?php echo isset($_POST['content']) ? ($_POST['content']) : "" ?></textarea>
    </div>
    
    <div class="form-group">
            <?php $dateTime = (new \DateTime('now'))->format('d/m/Y')?>
            <label for="date">Date de l'évenement</label>
            <input id="date" name="date" type="date" class="form-control" value="<?= $dateTime ?>" /> 
                
    </div>
    <div class="form-group">
            <label class="control-label" for="file">Fichier (tous formats | max. 4 Mo) :</label><br />
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <input type="file" name="file" id="input-4" /><br />
    </div>
    <button class="btn btn-primary" name="createEvent">Créer l'évenement</button>
</form>

<?php $this->stop('main_content') ?>