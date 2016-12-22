<?php $this->layout('layout', ['title' => 'Liste des reunions']) ?>

<?php $this->start('main_content') ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                   <h1 class="page_title_main"><hr> Agenda des réunions</h1>

                  <div class="evenements_img" >
                    <img src="<?= $this->assetUrl('front/img/meeting.png') ?>" alt="photo de réunion" class="img-responsive" >
                </div>

            </div>
        </div>

        <?php
            foreach($meetings as $meeting){
        ?>    

        <div class="row">
            <div class="col-xs-12">

                <div class="entete_evenements">
                    <p>
                        <i class="glyphicon glyphicon-calendar"></i>
                            <span class="date"><?php echo $meeting['date'] ?></span>
                            <span class="categorie pull-right">Réunions</span>
                    </p>                
                </div>

                <div class="col-xs-12">
                    <h3>Réunion du <?php echo $meeting['date'] ?></h3>
                        <p class="paragraphe_text">
                            <?php echo ucfirst($meeting['content'])?>
                        </p>
                </div>
            </div>
        </div> <!-- Close ROW -->
        <?php 
    } //Fin Foreach 
?>
    </div> <!-- Close CONTAINER-FLUID -->

</main>



<?php $this->stop('main_content') ?>
