<?php $this->layout('layout', ['title' => 'Présentation']) ?>

<?php $this->start('main_content') ?>
<!-- OPEN MAIN-->
  <main>

  <!--*************************************** Block Slider ***************************************-->
<div class="container-fluid visible-md-block visible-lg-block">
  <div class="row">
      <!-- Slider -->
      <ul class="rslides" id="slider">
        <li><img src="assets/img/slider/carousel02.png"></li>
        <li><img src="assets/img/slider/carousel03.png"></li>
        <li><img src="assets/img/slider/carousel04.png"></li>
      </ul>
     <!-- Close Slider  -->
  </div>    
</div>
<!--************************************ Close Block Slider --**********************************-->

    <div class="container-fluid">

      <div class="row border">
        <div class="col-xs-12 col-md-12">
          <h1 class="page_title">
              <hr>
            PRÉSENTATION
          </h1>
        </div>
        <div class="col-xs-12 col-md-5">
          <p class="paragraphe_text">
            Née en 2014, elle regroupe une soixantaine d’adhérents. Son but: créer du lien entre les habitants et animer ce coin de Lille-sud, appelé aussi Filbertville. <br />
            Le carnaval de printemps, la bourse aux jouets, la fête des voisins, un après-midi jeux en plein air... et bien sûr le vide-grenier, l’association a déjà pas mal d’initiatives à son actif et encore beaucoup de projets en tête.
          </p>
        </div>
    
        <div class="col-xs-push-2 col-xs-8 col-md-2 newsletter">
            <h2 class="newsletter_title">NEWSLETTER</h2>
              <div class="form-group">
                <form action="">
                  <input type="email" placeholder="your.email@email.com" name="newsletter" class="form-control newsletter_input">
                  <button type="submit" name="submit_newsletter" class="submit_newsletter btn btn-default">S'inscrire</button>
                </form>
              </div>
        </div>

      <div class="col-xs-12 col-md-4">
          <h2 class="title_facebook">
              REJOIGNEZ NOUS SUR FACEBOOK
          </h2>
        </div>
      </div> <!-- Close Row -->

      <div class="row">
            <div class="div_img_facebook">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAssociationdes2faubourgs%2F%3Fref%3Dpage_internal&tabs=timeline&width=500px&height=150px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300px" height="130px" style="border:none;overflow:hidden;margin-left: 0%" scrolling="no" frameborder="0" allowTransparency="true">
              </iframe>
            </div>
      </div> <!-- Close Row -->
    </div> <!-- Close Container -->
  </main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>