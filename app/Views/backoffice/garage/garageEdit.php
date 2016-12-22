<?php $this->layout('layoutBack', ['title' => 'Editer membre pour la braderie ']) ?>
    <?php $this->start('main_content') ?>
        <!-- formulaire de listing d'une réunion -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9  col-xs-9  col-lg-9">
                    <?= $message ?>
                        <table class="table table-striped">
                            <thead>
                                <!-- En-tête du tableau -->
                                <tr>
                                    <th class="text-center"><h4>Prénom</h4></th>
                                    <th class="text-center">Nom</th>
                                    <th class="text-center">Adresse</th>
                                    <th class="text-center" class="text-center">Email</th>
                                    <th class="text-center">Numéro de téléphone</th>
                                    <th class="text-center">Nombre de mètres résérvés</th>
                                    <th class="text-center">Adhesion</th>
                                    <th class="text-center">Période</th>
                                    <th class="text-center">Montant</th>
                                    <th class="text-center">Montant déjà payé</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Corps du tableau -->
                                <tr>
                                    <td  class="text-center">
                                        <?= $garage['firstname'] ?>
                                    </td>
                                    <td  class="text-center">
                                        <?= $garage['lastname'] ?>
                                    </td>
                                                <td  class="text-center">
                                                    <?= $garage['address'] ?>
                                                </td>
                                                <td  class="text-center">
                                                    <?= $garage['email'] ?>
                                                </td>
                                                <td  class="text-center">
                                                    <?= $garage['phone'] ?>
                                                </td>
                                                <td  class="text-center">
                                                    <?= $garage['reservedmeters'] ?>
                                                </td>
                                                <td  class="text-center">
                                                    <?= $garage['adhesion'] ?>
                                                </td>
                                                <td  class="text-center">
                                                    <?= $garage['period'] ?>
                                                </td>
                                                <td  class="text-center">
                                                    <?= $garage['amount'] ?>
                                                </td>
                                                <td  class="text-center">
                                                    <?= $garage['total_amount_paid'] ?>
                                                </td>
                                </tr>
                            </tbody>
                        </table><br>
                </div>
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-2 col-xs-3 col-xs-offset-2 col-lg-3 col-lg-offset 2">
                            <form action="<?php $this->url('backoffice_GarageEdit')?>" method="POST">
                                <div class="form-group text-center">
                                    <label class="center-block" for="firstname">Modifier le prenom : </label>
                                    <input id="firstname" value="<?= $garage['firstname'] ?>" name="firstname" type="text" class="form-control text-center" /> </div>
                                <div class="form-group text-center">
                                    <label for="lastname">Modifier le nom : </label>
                                    <input id="content" value="<?= $garage['lastname'] ?>" type="text" name="lastname" class="form-control text-center" /> </div>
                                <div class="form-group text-center">
                                    <label for="address">Modifier l'adresse : </label>
                                    <input id="content" value="<?= $garage['address'] ?>" type="text" name="address" class="form-control text-center"> </div>
                                <div class="form-group text-center">
                                    <label for="email">Modifier l'email : </label>
                                    <input id="content" value="<?= $garage['email'] ?>" type="text" name="email" class="form-control text-center"> </div>
                                <div class="form-group text-center">
                                    <label for="phone">Modifier le numéro de téléphone : </label>
                                    <input id="phone" name="phone" value="<?= $garage['phone'] ?>" class="form-control text-center"> </div>
                                <div class="form-group text-center">
                                    <label for="reservedmeters">Modifier le nombre de mètres réservés : </label>
                                    <input id="reservedmeters" name="reservedmeters" value="<?= $garage['reservedmeters'] ?>" class="form-control"> </div>
                                <div class="form-group text-center">
                                    <label for="adhesion">Modifier l'adhesion : </label>
                                    <input id="adhesion" name="adhesion" value="<?= $garage['adhesion'] ?>" class="form-control text-center"> </div>
                                <div class="form-group text-center">
                                    <label for="period">Modifier la période : </label>
                                    <input id="period" name="period" value="<?= $garage['period'] ?>" class="form-control text-center"> </div>
                                <div class="form-group text-center">
                                    <label for="amount">Modifier le montant : </label>
                                    <input id="amount" name="amount" value="<?= $garage['amount'] ?>" class="form-control text-center"> </div>
                                <div class="form-group text-center">
                                    <label for="total_amount_paid">Modifier le montant déjà payé : </label>
                                    <input id="total_amount_paid" name="total_amount_paid" value="<?= $garage['total_amount_paid'] ?>" class="form-control text-center"> </div>
                                <div class="form-group text-center">
                                    <button class="center-block btn btn-warning btn-sm" name="editGarage">Modifier la ligne</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->stop('main_content') ?>