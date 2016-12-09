<?php $this->layout('layoutBack', ['title' => 'Creer un évenement']) ?>

<?php $this->start('main_content') ?>
 
<?= $message ?>
<?php if(!empty($errorMessages)){
    echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
}?>

<form action="<?php $this->url('backoffice_EventCreate')?>" method="POST">
    <div class="form-group <?php echo (count($hasError)>0) ? $hasError[0] : ""  ?>">
        <label for="title">Titre </label>
        <input id="title" name="title" type="text" class="form-control" placeholder="Titre de l'évenement" value="<?php echo isset($_POST['title']) ? ($_POST['title']) : "" ?>"/> 
    </div>
    <div class="form-group <?php echo (count($hasError)>0) ? $hasError[0] : ""  ?>">
        <label for="category">Catégorie</label>
        <select class="form-control" id="category" name="category">
            <option value="braderie">Braderie</option>
            <option value="carnaval">Carnaval</option>
            <option value="Fete-de-quartier">Fete de quartier</option>
        </select>
    </div>
    <div class="form-group <?php echo (count($hasError)>0) ? $hasError[0] : ""  ?>">
        <label for="content">Description</label>
        <textarea id="content" name="content" class="form-control" rows="12" placeholder="Description complète de l'évenement" ><?php echo isset($_POST['content']) ? ($_POST['content']) : "" ?></textarea>
    </div>
    <div class="form-group <?php echo (count($hasError)>0) ? $hasError[0] : ""  ?>">
            
            <?php $dateTime = (new \DateTime('now'))->format('Y-m-d')?>
            <label for="date">Date de l'évenement</label>
            <input id="date" name="date" type="date" class="form-control" value="<?= $dateTime ?>" /> 
                
    </div>
    <button class="btn btn-primary" name="createEvent">Créer l'évenement</button>
</form>

<?php $this->stop('main_content') ?>
