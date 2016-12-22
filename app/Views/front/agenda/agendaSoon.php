<?php $this->layout('layout', ['title' => 'Evenement à venir']) ?>

<?php $this->start('main_content') ?>

<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12">
                   <h1 class="page_title_main"><hr> ÉVÉNEMENTS Å VENIR</h1>
            </div>
        </div>
        
        <?php
        foreach($events as $event){
            $date =(new \DateTime('now -1 day'))->format('Y-m-d');
                                 if ($event['date'] >= $date){
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
                    <img src="<?= '../..' . $path['path'] ?>" alt="<?php echo $event['title'] ?>" alt="photo d'un événement à venir des deux faubourgs" class="img-responsive" > 
                </div>

                <div class="col-xs-12">
                    <h3><?php echo $event['title'] ?></h3>
                        <p class="paragraphe_text">
                            <?php echo $event['content'] ?>
                        </p>
                </div>
        </div> <!-- Close ROW -->
    <?php
                } // Fin If
        }// Fin foreach  
    ?>
    </div> <!-- Close CONTAINER-FLUID -->

</main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>
