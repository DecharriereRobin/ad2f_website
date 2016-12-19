<?php $this->layout('layoutBack', ['title' => 'Creer un membre']) ?>

<?php $this->start('main_content') ?>

<?= $message ?>
<?php if(!empty($errorMessages)){
    echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
}?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-push-3 col-sm-4">
            <form action="<?php $this->url('backoffice_MemberCreate')?>" method="POST">
                <div class="form-group">
                    <label for="name">Nom </label>
                    <input id="name" name="firstname" type="text" class="form-control" placeholder="Nom" />
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input id="prenom" name="lastname" type="text" class="form-control" placeholder="Prénom" />
                </div>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <input id="address" name="address" class="form-control" placeholder="Adresse" >
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input id="phone" name="phone" type="text" class="form-control" placeholder="Téléphone" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" />
                </div>

                <fieldset class="form-group">
                    <legend>Cotisation</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_status" id="paid" value="1">
                            Cotisation payée
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_status" id="not_paid" value="0" checked>
                            Cotisation en attente
                        </label>
                    </div>
                </fieldset>

                <button class="btn btn-primary col-lg-push-3 col-lg-6" name="createMember">Créer le membre</button>
            </form>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

