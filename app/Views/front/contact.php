<?php $this->layout('layout', ['title' => 'contact']) ?>

<?php $this->start('main_content') ?>
  <p>Profil de l association </p>

  <?php foreach($associations as $association){ ?>

          <p>Nom :</p> <?php echo ucfirst($association['name'])?>
          </br>
          <p>adresse:</p><?php echo ($association['address'])?>
          <?php echo ($association['ZIP_code'])?>
          <?php echo ucfirst($association['city'])?>
          </br>
          <p>Telephone:</p>
          <?php echo ucfirst($association['phone'])?>
  <?php
      }
  ?>

  <h2>Formulaire de contact<h2>

  <!-- Formulaire de contact -->

  <form action="<?php $this->url('association_contact') ?>" method="POST">
          <div class="form-group">
              <label for="firstname">Nom :</label>
              <input id="firstname" name="firstname" type="text" class="form-control" value="Nom">
          </div>
          <div class="form-group">
              <label for="lastname">Prenom :</label>
              <input id="lastname" name="lastname" type="text" class="form-control" value="Prenom">
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input id="email" name="email" type="email" class="form-control" value="Email">
          </div>
          <div class="form-group">
              <label for="subject">Sujet:</label>
              <input id="subject" name="subject" type="text" class="form-control" value="Sujet">
          </div>
          <div class="form-group">
              <label for="message">Message :</label>
              <textarea id="message" name="message" type="texte"  rows="4" cols="50" class="form-control">
              Contenu de votre message.
              </textarea>
          </div>
          <button name="SendMail" class="btn btn-default">Envoyer</button>
      </form>
  <?= $message ?>

<?php $this->stop('main_content') ?>
