<?php $this->layout('layoutBack', ['title' => 'Ajouter des membres à la liste des participants de la braderie']) ?>
    <?php $this->start('main_content') ?>
        <!--formulaire d'ajout d'une réunion -->
        
            <div class="container">
                <div class="row">
                    <form action="<?php $this->url('backoffice_GarageCreate')?>" method="POST">
                        <div class="col-md-4 col-md-offset-2 col-xs-4 col-xs-offset-2 col-lg-4 col-lg-offset 2">
                           <?= $message ?>
                            <a href="<?= $this->url('backoffice_EventList') ?>" class="btn btn-info center-block"> Retour à la liste des évenements</a>
                            <div class="form-group text-center">
                                <label for="firstname">Prénom : </label>
                                <input id="firstname" name="firstname" type="text" class="form-control" /> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="lastname">Nom : </label>
                                <input id="lastname" name="lastname" class="form-control" type="text"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="address">Votre adresse : </label>
                                <input id="address" name="address" class="form-control" type="text"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="email">Votre email : </label>
                                <input id="email" name="email" class="form-control" type="email"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="phone">Votre numéro de téléphone : </label>
                                <input id="phone" name="phone" class="form-control" type="text"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="reservedmeters">Nombres de mètres résérvés : </label>
                                <input id="reservedmeters" name="reservedmeters" class="form-control" type="text"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="adhesion">Adhésion : </label>
                                <input id="adhesion" name="adhesion" class="form-control"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="'period">Période : </label>
                                <input id="'period" name="'period" class="form-control"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="amount">Montant : </label>
                                <input id="amount" name="amount" class="form-control"> </div>
                            <div class="form-group text-center">
                                <label class="control-label" for="total_amount_paid">Montant total payé : </label>
                                <input id="total_amount_paid" name="total_amount_paid" class="form-control"> </div>
                            <button class="btn btn-success btn-sm center-block" name="createGarage">Inserer</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php $this->stop('main_content') ?>