<?php $this->layout('layout', ['title' => 'Fete des voisins']) ?>
<?php $this->start('main_content') ?>

<!-- OPEN MAIN-->
  <main>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <h1 class="page_title">
                <hr>
                FÊTE DU QUARTIER
            </h1>
            </div>
        </div> <!-- Close Row -->

        <div class="row">
            <div class="evenements_img">
                <img src="<?= $this->assetUrl('front/img/fond_temporaire.jpg') ?>" alt="photo de la fête du quartier des deux faubourgs">
            </div>
            <div class="col-xs-12">
            <h3>!! Titre From BDD !!</h3>
                <p class="paragraphe_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt id officiis quam aspernatur quod quos nulla cum saepe tenetur natus, corporis vel architecto deserunt temporibus perferendis facere officia modi. <br />
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusamus aspernatur nesciunt itaque.
                 </p>
            </div>
        </div> <!-- Close Row -->

        <?php
        foreach($events as $event){
                                 if ($event['category'] == 'Fete-de-quartier'){
                                     $id = $event['id'];
                                     $path = $media->imageEvent($id);
                ?>
        <div class="row">
            <div class="col-xs-12 entete_evenements">
                <p>
                    <i class="glyphicon glyphicon-calendar"></i>
                        <span class="date">!! <?php echo $event['date'] ?> !!</span>

                        <span class="categorie pull-right">!! <?php echo $event['category'] ?> !!</span>
                </p>
            </div>
        </div> <!-- Close Row -->

        <div class="row">
            <div class="evenements_img">
                <img src="<?= '../..' . $path['path'] ?>" alt="<?php echo $event['title'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <h3><?php echo $event['title'] ?>!</h3>
                <p class="paragraphe_text">
                    <?php echo $event['content'] ?>
                </p>
            </div>
        </div> <!-- Close Row -->

        <?php
    }//fin if
}//fin foreach     ?>








    </div> <!-- Close Container -->
  </main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>
