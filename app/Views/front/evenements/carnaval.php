<?php $this->layout('layout', ['title' => 'Information sur le carnaval des 2 faubourg']) ?>

<?php $this->start('main_content') ?>

<!-- OPEN MAIN-->
  <main>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <h1 class="page_title">
                <hr>
                CARNAVAL
            </h1>
            </div>
        </div> <!-- Close Row -->

        <div class="row">
            <div class="evenements_img">
                <img src="<?= $this->assetUrl('front/img/fond_temporaire.jpg') ?>" alt="photo du carnaval des deux faubourgs">
            </div>
            <div class="col-xs-12">
                <p class="paragraphe_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt id officiis quam aspernatur quod quos nulla cum saepe tenetur natus, corporis vel architecto deserunt temporibus perferendis facere officia modi. <br />
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusamus aspernatur nesciunt itaque.
                 </p>
            </div>
        </div> <!-- Close Row -->

        <div class="row">
            <div class="col-xs-12 entete_evenements">
                <p>
                    <i class="glyphicon glyphicon-calendar"></i>
                        <span class="date">!! date !!</span>
                        <span class="categorie pull-right">!! categorie carnaval !!</span>
                </p>                
            </div>
        </div> <!-- Close Row -->

        <div class="row">
            <div class="evenements_img">
                <img src="<?= $this->assetUrl('front/img/fond_temporaire.jpg') ?>" alt="photo du carnaval des deux faubourgs">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <h3>!! Titre From BDD !!</h3>
                <p class="paragraphe_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt id officiis quam aspernatur quod quos nulla cum saepe tenetur natus, corporis vel architecto deserunt temporibus perferendis facere officia modi.
                </p>
            </div>
        </div> <!-- Close Row -->

        <div class="row">
            <div class="col-xs-12 entete_evenements">
                <p>
                    <i class="glyphicon glyphicon-calendar"></i>
                        <span class="date">!! date !!</span>
                        <span class="categorie pull-right">!! categorie carnaval !!</span>
                </p>                
            </div>
        </div> <!-- Close Row -->

        <div class="row">
            <div class="evenements_img">
                <img src="<?= $this->assetUrl('front/img/fond_temporaire.jpg') ?>" alt="photo du carnaval des deux faubourgs">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <h3>!! Titre From BDD !!</h3>
                <p class="paragraphe_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt id officiis quam aspernatur quod quos nulla cum saepe tenetur natus, corporis vel architecto deserunt temporibus perferendis facere officia modi.
                </p>
            </div>
        </div> <!-- Close Row -->




    </div> <!-- Close Container -->
  </main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>