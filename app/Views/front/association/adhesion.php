<?php $this->layout('layout', ['title' => 'Adhesion']) ?>

<?php $this->start('main_content') ?>

<main>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="page_title">
              <hr>
            ADHÉRER À L'ASSOCIATION
          </h1>
        </div>
      <div>
        <p class="paragraphe_text">
            L’adhésion est fixée à 5€ par famille.<br />
            Elle est valable du 1 septembre au 31 août.
        </p>
        <p class="paragraphe_text">
            Remplisser le formulaire ci-dessous pour adhérer à l'association des deux faubourgs.
        </p>
        <p class="paragraphe_text">
            Le règlement peut se faire, après avoir validé le formulaire, en déposant chèque ou liquide au siège de l’association : 1 bis rue Berthelot à Lille.<br />

            Au moment du réglement, dans les locaux de l'association ou lors de l'envoi par courrier, merci de rappeler vos coordonnées.
        </p>
        </div>
      </div> <!-- Close Row -->
    </div>
    <div class="container">
                <div class="col-xs-12">
                    <form class="well form-horizontal" action="<?php $this->url('association_adhesion')?> " method="post"  id="contact_form">
                <fieldset>

                <!-- Form Name -->
                <legend>Adhérer à l'association !</legend>

                <div class="form-group">
                  <label class="col-md-4 control-label">Nom</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="firstname" placeholder="Nom" class="form-control"  type="text">
                    </div>
                  </div>
                </div>


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
                  <label class="col-md-4 control-label" >Adresse</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="address" placeholder="Adresse" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" >Téléphone</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="phone" placeholder="Téléphone" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-4 control-label">Email</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="Email" class="form-control"  type="email">
                    </div>
                  </div>
                </div>

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Merci pour votre adhésion. Nous vous répondrons dans les plus brefs délais.</div>

                <!-- Button -->
                <div class="form-group">
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-default btn_form_submit" name="adhesion" >Envoyer <span class="glyphicon glyphicon-send"></span></button>
                  </div>
                </div>
                <?= $message ?>

                </fieldset>
            </form>
            </div>
        </div>
    </div>
</main>



<?php $this->stop('main_content') ?>
