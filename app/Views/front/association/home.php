<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<main>

<div class="container-fluid visible-sm visible-md-block visible-lg-block">

  <div class="row">
       <div class="col-lg-12" > 

        <!-- Slider -->
        <ul class="rslides" id="slider">
          <li><img src="<?= '../..'.$imageSlider[0]['path'] ?>" alt="Association des 2 faubourgs slider 1"></li>
          <li><img src="<?= '../..'.$imageSlider[1]['path'] ?>" alt="Association des 2 faubourgs slider 2"></li>
          <li><img src="<?= '../..'.$imageSlider[2]['path'] ?>" alt="Association des 2 faubourgs slider 3"></li>
        </ul>
        <!-- Close Slider --> 
  
       </div>
  </div> <!-- Close Row -->
</div>
  <div class="row presentation"> <!-- style="margin-top: 6%; -->
      <div class="col-xs-12">
            <h1 class="page_title_main presentation"><hr>PRÉSENTATION</h1>
      </div>
  </div> <!-- Close Row -->

  <div class="row">
    <div class="col-xs-12
                col-lg-push-1 col-lg-10">
      <p class="paragraphe_text">
        Née en 2014, elle regroupe une soixantaine d’adhérents. Son but: créer du lien entre les habitants et animer ce coin de Lille-sud, appelé aussi Filbertville. <br />
        Le carnaval de printemps, la bourse aux jouets, la fête des voisins, un après-midi jeux en plein air... et bien sûr le vide-grenier, l’association a déjà pas mal d’initiatives à son actif et encore beaucoup de projets en tête.
      </p>
    </div>
  </div> <!-- Close Row -->

  <div class="row">

    <div class="col-xs-push-2 col-xs-8
                col-sm-push-1 col-sm-5
                col-lg-push-2 col-lg-3">
          <div class="form-group 
                      newsletter">
            <h2 class="newsletter_title">NEWSLETTER</h2> <!--  style="margin-bottom: 10%;" -->
                <form action="" method="POST">
                  <input type="email" placeholder="your.email@email.com" name="newsletter" class="form-control newsletter_input" style=""> <!-- margin-bottom: 13%; -->
                  <button type="submit" name="submit_newsletter" class="submit_newsletter btn btn-default" style=""><!-- margin-bottom: 5%; -->S'inscrire</button>
                </form>
          </div>  
    </div>

    <div class="col-sm-push-1 col-sm-5 
                col-lg-push-3 col-lg-4">
                <h2 class="newsletter_title" style="">SUIVEZ NOTRE ACTUALITÉ</h2>
                  <div class="logo_facebook">
                    <a href="https://fr-fr.facebook.com/Associationdes2faubourgs" alt="lien facebook de l'asso" target="_blank"><img src="<?= $this->assetUrl('front/img/facebook.png') ?>"></a>
                  </div>
    </div>
  </div> <!-- Close Row -->
</div> <!-- Close Container -->


    </div> <!-- Close Container -->
  </main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>