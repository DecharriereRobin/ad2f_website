<?php $this->layout('layoutBack', ['title' => 'Ajouter des membres à la liste des participants de la braderie']) ?>
<?php $this->start('main_content') ?>
  <!--formulaire d'ajout d'une réunion -->
        <?= $message ?>
            <form class="form-group" action="<?php $this->url('backoffice_GarageCreate')?>" method="POST">
                <div class="form-group">
                    <label for="firstname">Prénom : </label>
                    <input id="firstname" name="firstname" type="text" class="form-control"/> </div>
                <div class="form-group">
                    <label for="lastname">Nom : </label>
                    <textarea id="lastname" name="lastname" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Votre adresse : </label>
                    <textarea id="address" name="address" class="form-control"></textarea>
                </div>
                 <div class="form-group">
                    <label for="email">Votre email : </label>
                    <textarea id="email" name="email" class="form-control"></textarea>
                </div>
                 <div class="form-group">
                    <label for="phone">Votre numéro de téléphone : </label>
                    <textarea id="phone" name="phone" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="reservedmeters">Nombres de mètres résérvés : </label>
                    <textarea id="reservedmeters" name="reservedmeters" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="adhesion">Adhésion : </label>
                    <textarea id="adhesion" name="adhesion" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="'period">Période : </label>
                    <textarea id="'period" name="'period" class="form-control"></textarea>
                </div>
                 <div class="form-group">
                    <label for="amount">Montant : </label>
                    <textarea id="amount" name="amount" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="total_amount_paid">Montant total payé : </label>
                    <textarea id="total_amount_paid" name="total_amount_paid" class="form-control"></textarea>
                </div>
                <button class="btn btn-success" name="createGarage">Inserer</button>
            </form>
<?php $this->stop('main_content') ?>