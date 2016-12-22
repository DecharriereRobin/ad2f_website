<?php $this->layout('layout', ['title' => 'Information sur les braderies']) ?>

<?php $this->start('main_content') ?>

<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12">
                   <h1 class="page_title_main"><hr> BRADERIE</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h1 class="page_title_braderie_inscrire">
                     <a href="<?= $this->url('eventViewer_braderieInscription') ?>">S'INSCRIRE À LA BRADERIE</a>
                </h1>
            </div>
        </div>

        <!-- Boucle pour afficher les articles -->
        <?php
        foreach($events as $event){
                                 if ($event['category'] == 'braderie'){
                                     $id = $event['id'];
                                     $path = $media->imageEvent($id);
                ?>

        <div class="row">
            <div class="col-xs-12">

                <div class="entete_evenements ">
                    <p>
                        <i class="glyphicon glyphicon-calendar"></i>
                            <span class="date"><?php echo $event['date'] ?></span>
                            <span class="categorie pull-right"><?php echo $event['category'] ?></span>
                    </p>

                </div>
            </div>

                <div class="col-xs-12 evenements_img" >
                    <img src="<?= '../..' . $path['path'] ?>" alt="<?php echo $event['title'] ?>" class="img-responsive" > 
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
}//fin foreach     ?>

    </div> <!-- Close CONTAINER-FLUID -->

</main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>