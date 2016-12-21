<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


<!-- OPEN MAIN-->
  <main>


  <!--*************************************** Block Slider ***************************************-->
<div class="container-fluid visible-sm visible-md-block visible-lg-block">
  <div class="row">
      <!-- Slider -->
      <ul class="rslides" id="slider">
        <li><img src="<?= '../..'.$imageSlider[0]['path'] ?>" alt="Association des 2 faubourgs slider 1"></li>
        <li><img src="<?= '../..'.$imageSlider[1]['path'] ?>" alt="Association des 2 faubourgs slider 2"></li>
        <li><img src="<?= '../..'.$imageSlider[2]['path'] ?>" alt="Association des 2 faubourgs slider 3"></li>
      </ul>
     <!-- Close Slider  -->
  </div>    
</div>
<!--************************************ Close Block Slider --**********************************-->

    <div class="container-fluid">

      <div class="row">
        <div class="col-xs-12
                    col-sm-12">
          <h1 class="page_title_main">
            PRÉSENTATION
          </h1>
        </div>
        <div class="col-xs-12
                    col-sm-push-2 col-sm-8">
          <p class="paragraphe_text">
            Née en 2014, elle regroupe une soixantaine d’adhérents. Son but: créer du lien entre les habitants et animer ce coin de Lille-sud, appelé aussi Filbertville. <br />
            Le carnaval de printemps, la bourse aux jouets, la fête des voisins, un après-midi jeux en plein air... et bien sûr le vide-grenier, l’association a déjà pas mal d’initiatives à son actif et encore beaucoup de projets en tête.
          </p>
        </div>
      </div> <!-- Close Row --> 

      <div class="row">
        <div class="col-xs-push-2 col-xs-8
                    col-sm-push-0 col-sm-6">
            <h2 class="title_actu">SUIVEZ NOTRE ACTUALITÉ</h2>
          
          <div class="form-group col-sm-push-1 col-sm-10 newsletter">
            <h2 class="newsletter_title">NEWSLETTER</h2>
                <form action="" method="POST">
                  <input type="email" placeholder="your.email@email.com" name="newsletter" class="form-control newsletter_input">
                  <button type="submit" name="submit_newsletter" class="submit_newsletter btn btn-default">S'inscrire</button>
                </form>
          </div>     
        </div> 

        <div class="col-xs-push-0 col-xs-6
                    col-sm-push-0 col-sm-6 border">
            <h2 class="title_facebook">REJOIGNEZ NOUS SUR FACEBOOK</h2>
          
          <div class="col-sm-push-1 col-sm-10 div_img_facebook">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAssociationdes2faubourgs%2F%3Fref%3Dpage_internal&tabs=timeline&width=500px&height=150px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="350px" height="130px" style="border:none;overflow:hidden;margin: 0 auto" scrolling="no" frameborder="0" allowTransparency="true">
              </iframe>
          </div>     
        </div> 


      </div> <!-- Close Row -->
<!--
      <div class="col-xs-12
                  col-sm-push-2 col-sm-6">
          <h2 class="title_facebook">
              REJOIGNEZ NOUS SUR FACEBOOK
          </h2>
        </div>

            <div class="col-xs-12 div_img_facebook 
                        col-sm-push-2 col-sm-3">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAssociationdes2faubourgs%2F%3Fref%3Dpage_internal&tabs=timeline&width=500px&height=150px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="350px" height="130px" style="border:none;overflow:hidden;margin: 0 auto" scrolling="no" frameborder="0" allowTransparency="true">
              </iframe>
            </div>


-->






    </div> <!-- Close Container -->
  </main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>