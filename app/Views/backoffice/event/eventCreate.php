<?php $this->layout('layoutBack', ['title' => 'Creer un évenement']) ?>

<?php $this->start('main_content') ?>
 
<?= $message ?>

<?php if(!empty($errorMessages)){
    echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
}?>

<div class="col-md-9 col-lg-11 text-center">
    <a href="<?= $this->url('backoffice_EventList') ?>" class="btn btn-info btn-md"> Retour à la liste des évenements</a><br />
</div>
<div class="col-md-9 col-lg-11">
    <form action="<?php $this->url('backoffice_EventCreate')?>" method="POST" enctype="multipart/form-data">

        <div class="form-group <?php echo isset($hasError['title']) ? $hasError['title'] : ""  ?>">
            <label for="title">Titre: </label><span class="mandatory"> *</span>
            <input id="title" name="title" type="text" class="form-control" placeholder="Titre de l'évenement" value="<?php echo isset($_POST['title']) ? ($_POST['title']) : "" ?>"/> 
        </div>

        <div class="form-group">
            <label for="category">Catégorie: </label>
            <select class="form-control" id="category" name="category">
                <option value="braderie">Braderie</option>
                <option value="carnaval">Carnaval</option>
                <option value="Fete-de-quartier">Fete de quartier</option>
            </select>
        </div>

        <div class="form-group <?php echo isset($hasError['content']) ? $hasError['content'] : ""  ?>">
            <label for="content">Description: </label><span class="mandatory"> *</span>
            <textarea id="content" name="content" class="form-control" rows="12" placeholder="Description complète de l'évenement" ><?php echo isset($_POST['content']) ? ($_POST['content']) : "" ?></textarea>
        </div>

        <div class="form-group">
                <?php $dateTime = (new \DateTime('now'))->format('Y-m-d')?>
                <label for="date">Date de l'évenement: </label>
                <input id="datepicker" name="date" type="text" class="form-control" value="<?= $dateTime ?>" /> 

        </div>
        <div class="form-group text-center">
                <label class="btn btn-primary active btn-sm btn-block" for="file"><input type="file" name="file" id="file" accept="image/*" style="display:none;" /><i class="glyphicon glyphicon-camera"></i> Ajouter une image </label><br />
                <span class='label label-warning' id="upload-file-info"></span>
        </div>
        <div class="center-block">
            <img id="thumbnail" class="img-responsive" style="display:none;"/>
        </div> 
        <div class="text-center">
            <button class="btn btn-primary btn-success" name="createEvent">Créer l'évenement</button>
        </div> 
    </form>
</div>
<?php $this->stop('main_content') ?>
