<?php $this->layout('layout', ['title' => 'Fete du quartier']) ?>
<?php $this->start('main_content') ?>

<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12">
                   <h1 class="page_title_main"><hr> FÊTE DU QUARTIER</h1>
            </div>
        </div>

    <?php
        foreach($events as $event){
                                 if ($event['category'] == 'Fete-de-quartier'){
                                     $id = $event['id'];
                                     $path = $media->imageEvent($id);
                ?>

        <div class="row">
            <div class="col-xs-12">

                <div class="entete_evenements ">
                    <p>
                        <i class="glyphicon glyphicon-calendar"></i>
                            <span class="date"><?php echo $event['date']  ?></span>
                            <span class="categorie pull-right"><?php echo $event['category'] ?></span>
                    </p>

                </div>
            </div>

                <div class="col-xs-12 evenements_img" >
                    <img src="<?= '../..' . $path['path'] ?>" alt="<?php echo $event['title'] ?>" alt="photo du carnaval de la fête du quartier des deux faubourgs" class="img-responsive" > 
                </div>

                <div class="col-xs-12">
                    <h3><?php echo $event['title'] ?></h3>
                        <p class="paragraphe_text">
                            <?php echo $event['content'] ?>
                        </p>
                </div>
        </div> <!-- Close ROW -->
        <?php
    }//fin if
}//fin foreach ?>

    </div> <!-- Close CONTAINER-FLUID -->

</main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>