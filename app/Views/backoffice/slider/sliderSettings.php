<?php $this->layout('layoutBack', ['title' => 'Editer le slider de la page d\'accueil ']) ?>

<?php $this->start('main_content') ?>

<?php echo isset($_SESSION['message'])? ($_SESSION['message']): NULL  ?>
<?php unset($_SESSION['message']); ?>

<form action="<?php $this->url('backoffice_Slider') ?>" method="POST" enctype="multipart/form-data">
    <div class="panel-group panel-info text-center">
          <h5 class="panel-heading"><strong>Image #1</strong></h5>
           <img src="<?= '../..'.$sliderImages[0]['path'] ?>" alt="..." class="img-responsive panel-body center-block" /><br />
            <label class="btn btn-primary active btn-sm" for="file1"><input type="file" name="file1" id="file1" accept="image/*"  style="display:none;" /><i class="glyphicon glyphicon-camera"></i> Modifier la première image</label>
            <span class='label label-warning' id="upload-file-info"></span>
            
    </div>
        <div class="center-block">
        <img id="thumbnail" class="img-responsive" style="display:none;"/>
    </div>
    <hr> 
    <div class="panel-group panel-info text-center">
          <h5 class="panel-heading"><strong>Image #2</strong></h5>
           <img src="<?= '../..'.$sliderImages[1]['path'] ?>" alt="..." class="img-responsive panel-body center-block" /><br />
            <label class="btn btn-primary active btn-sm" for="file2"><input type="file" name="file2" id="file2" accept="image/*"  style="display:none;" /><i class="glyphicon glyphicon-camera"></i> Modifier la deuxième image</label>
            <span class='label label-warning' id="upload-file-info"></span>
    </div>
    <div class="center-block">
        <img id="thumbnail" class="img-responsive" style="display:none;"/>
    </div>
    <hr> 
    <div class="panel-group panel-info text-center">
          <h5 class="panel-heading"><strong>Image #3</strong></h5>
           <img src="<?= '../..'.$sliderImages[2]['path'] ?>" alt="..." class="img-responsive panel-body center-block" /><br />
            <label class="btn btn-primary active btn-sm" for="file3"><input type="file" name="file3" id="file3" accept="image/*"  style="display:none;" /><i class="glyphicon glyphicon-camera"></i> Modifier la troisième image</label>
            <span class='label label-warning' id="upload-file-info"></span>
    </div>
    <div class="center-block">
        <img id="thumbnail" class="img-responsive" style="display:none;"/>
    </div>
    <hr>  
    <div class="text-center"> 
        <button class="btn btn-success" name="editSlider">Mettre à jour le slider</button>
        <a href="<?php $this->url('backoffice_Slider')?>" class="btn btn-danger " name="cancel">Annuler</a>
    </div>
</form>
<div><br /></div>


<?php $this->stop('main_content') ?>