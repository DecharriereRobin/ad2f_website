<?php $this->layout('layoutBack', ['title' => 'Creer un évenement']) ?>
<?php $this->start('main_content') ?>
<?= $message ?>
<br>
<br>
<?php if(!empty($errorMessages)){
    echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
    echo '<a href="<?= $this->url(\'backoffice_EventDelete\') ?>" class="btn btn-danger center-block"> Retour à la liste des évenements</a>';
}?>
   <div class="container-fluid">
        <div class="row">
            <form action="<?php $this->url('backoffice_EventCreate')?>" method="POST" enctype="multipart/form-data">
                <div class="col-sm-push-2 col-sm-4">
                    <div class="form-group">
                        <button href="<?= $this->url('backoffice_EventList') ?>" class="btn btn-info center-block" placeholder="Retour"> Retour à la liste des évenements</button></div><br>
                <div class="form-group <?php echo isset($hasError['title']) ? $hasError['title'] : ""  ?>">
                        <label class ="control-label" for="title">Titre </label>
                        <input id="title" name="title" type="text" class="form-control" placeholder="Titre de l'évenement" value="<?php echo isset($_POST['title']) ? ($_POST['title']) : "" ?>"/> 
                        </div>
                <div class="form-group">
                        <label class ="control-label" for="category">Catégorie</label>
                            <select class="form-control" id="category" name="category">
                            <option value="braderie">Braderie</option>
                            <option value="carnaval">Carnaval</option>
                            <option value="Fete-de-quartier">Fete de quartier</option>
                            </select>
                </div>   
                <div class="form-group <?php echo isset($hasError['content']) ? $hasError['content'] : ""  ?>">
                        <label class ="control-label" for="content">Description</label>
                        <textarea id="content" name="content" class="form-control" rows="12" placeholder="Description complète de l'évenement" ><?php echo isset($_POST['content']) ? ($_POST['content']) : "" ?></textarea>
                </div>
    
            <div class="form-group">
                <?php $dateTime = (new \DateTime('now'))->format('d/m/Y')?>
                <label class ="control-label" for="date">Date de l'évenement</label>
                <input id="date" name="date" type="date" class="form-control center-block" value="<?= $dateTime ?>" /> 
            </div>
            <div class="form-group">
                <label class="control-label" for="file">Fichier (tous formats | max. 4 Mo) :</label><br>
                <input type="hidden" name="MAX_FILE_SIZE" value="4194304" class="center-block form-control">
                <input type="file" name="file" id="input-4" class="center-block form-control"><br />
            </div>
            <div class="form-group">
            <button class="center-block btn btn-primary" name="createEvent" type="button" placeholder="Créer">Créer l'évenement</button></div>
            </div>
        </form>
    </div>
</div>

<?php $this->stop('main_content') ?>