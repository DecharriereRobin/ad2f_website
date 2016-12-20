<?php $this->layout('layout', ['title' => 'contact']) ?>

<?php $this->start('main_content') ?>
  
<main>
  <div class="container">
    <div class="row">
        <div class="col-xs-12">
           <h1 class="page_title">
              CONTACT
           </h1>
        </div>
    </div>
    <div class="col-xs-12">
      <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>

      <!-- Form Name -->
      <legend>Contacter Nous !</legend>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Nom</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="firstname" placeholder="Nom" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Prénom</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="lastname" placeholder="Prénom" class="form-control"  type="text">
          </div>
        </div>
      </div>


       <div class="form-group">
        <label class="col-md-4 control-label">Email</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" placeholder="Email" class="form-control"  type="text">
          </div>
        </div>
      </div>

       <div class="form-group">
        <label class="col-md-4 control-label">Message</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <textarea name="email" placeholder="Taper votre message ici..." class="form-control"  type="text"></textarea>
          </div>
        </div>
      </div>

      <!-- Success message -->
      <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Merci pour votre message. Nous vous répondrons dans les plus brefs délais.
      </div>

      <!-- Button -->
      <div class="form-group">
        <div class="col-md-4">
          <button type="submit" class="btn btn-default btn_form_submit" >Envoyer <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>

      </fieldset>
      </form>
      </div>
  </div><!-- Close container FORM-->

  <div class="container"> 
    <div class="row">
      <div class="col-xs-12"> 
        <h2 class="page_title">COORDONNÉES</h2>
        <h3>ASSOCIATION DES DEUX FAUBOURGS</h3>
      </div>
    </div> <!-- Close Row -->

    <div class="row coordonnees">
      <div class="col-xs-12">
        <p>
          <span class="glyphicon glyphicon-envelope glyph_coordonnees"></span>Email : 
          <a href="mailto:les2faubourgs@gmail.com">les2faubourgs@gmail.com</a>

        </p>
      </div>

      <div class="col-xs-12">
        <p>
          <span class="glyphicon glyphicon-home glyph_coordonnees"></span>Adresse :
          23 rue Caventou 59000 Lille
        </p>      
      </div>
    </div>
  </div><!-- CLose container -->

  <div class="container">
    <div class="row">
      <div class="iframe_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.858038486307!2d3.068452315741921!3d50.611175379497865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5b8ed70d541%3A0xa0287d88ba65a43f!2s1+Rue+Berthelot%2C+59000+Lille!5e0!3m2!1sfr!2sfr!4v1482083453558" width="300" height="300" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</main>

  <?= $message ?>

<?php $this->stop('main_content') ?>
