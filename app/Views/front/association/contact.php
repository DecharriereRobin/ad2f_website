<?php $this->layout('layout', ['title' => 'contact']) ?>

<?php $this->start('main_content') ?>
  
<main>
  <div class="container">
    <div class="row">
        <div class="col-xs-12">
          <h1 class="page_title_main">
            <hr>
            CONTACT
          </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-xs-12
                  col-md-push-2 col-md-8">
        <form class="well form-horizontal" action=" " method="post"  id="contact_form">
          <fieldset>

          <legend>Contacter Nous !</legend>

      <div class="form-group">
          <div class="col-xs-12 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="firstname" placeholder="Nom" class="form-control"  type="text">
            </div>
          </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="lastname" placeholder="Prénom" class="form-control"  type="text">
          </div>
        </div>
      </div>

       <div class="form-group">
          <div class="col-xs-12 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="Email" class="form-control"  type="text">
            </div>
          </div>
      </div>
       
              <div class="form-group">
          <div class="col-xs-12 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="subject" placeholder="sujet" class="form-control"  type="text">
            </div>
          </div>
      </div>

       <div class="form-group"> 
          <div class="col-xs-12 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea name="message" placeholder="Taper votre message ici..." class="form-control"  type="text">
                </textarea>
            </div>
          </div>
        </div>

      <!-- Success message -->
     <!-- <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon  glyphicon-thumbs-up"></i> Merci pour votre message. Nous vous répondrons dans les plus brefs délais.
      </div> -->

      <!-- Button -->
      <div class="form-group">
          <button type="submit" class="btn btn-default btn_form_submit" name="SendMail" >Envoyer <span class=" glyphicon glyphicon-send"></span>
          </button>
      </div>

          </fieldset>
        </form>
      </div>

      <div class="col-xs-12
                  div_coordonnees">
          <h2 class="title_coordonnees">Coordonnées</h2>
          <h3 class="title_coordonnees_assoc">ASSOCIATION DES DEUX FAUBOURGS</h3>

            <p class="coordonnees">
              <span class="glyphicon glyphicon-envelope glyph_coordonnees"></span>Email : 
                <a href="mailto:les2faubourgs@gmail.com">les2faubourgs@gmail.com</a>
            </p>
            <p class="coordonnees">
              <span class="glyphicon glyphicon-home glyph_coordonnees"></span>Adresse :
              23 rue Caventou 59000 Lille
            </p>

        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.8580384863076!2d3.068452316078663!3d50.61117537949785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5b8ed70d541%3A0xa0287d88ba65a43f!2s1+Rue+Berthelot%2C+59000+Lille!5e0!3m2!1sfr!2sfr!4v1482333659410" width="800" height="500" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>

      </div>

<div>

  <?= $message ?>

<?php $this->stop('main_content') ?>
