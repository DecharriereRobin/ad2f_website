<?php $this->layout('layoutBack', ['title' => 'Editer membre pour la braderie ']) ?>
    <?php $this->start('main_content') ?>
        <!-- formulaire de listing d'une réunion -->
        <?= $message ?>
            <table class="table table-striped">
                <thead>
                    <!-- En-tête du tableau -->
                    <tr>
                       <th>Prénom</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Numéro de téléphone</th>
                        <th>Nombre de mètres résérvés</th>
                        <th>Adhesion</th>
                        <th>Période</th>
                        <th>Montant</th>
                        <th>Montant déjà payé</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Corps du tableau -->
                    <tr>
                        <td>
                            <?= $garage['firstname'] ?>
                        </td>
                        <td>
                            <?= $garage['lastname'] ?>
                        </td>
                        <td>
                            <?= $garage['address'] ?>
                        </td>
                        <td>
                            <?= $garage['email'] ?>
                        </td>
                        <td>
                            <?= $garage['phone'] ?>
                        </td>
                        <td>
                            <?= $garage['reservedmeters'] ?>
                        </td>
                        <td>
                            <?= $garage['adhesion'] ?>
                        </td>
                        <td>
                            <?= $garage['period'] ?>
                        </td>
                        <td>
                            <?= $garage['amount'] ?>
                        </td>
                        <td>
                            <?= $garage['total_amount_paid'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <form action="<?php $this->url('backoffice_GarageEdit')?>" method="POST">
                <div class="form-group">
                    <label for="firstname">Modifier le prenom : </label>
                    <input id="firstname" value="<?= $garage['firstname'] ?>" name="firstname" type="text" class="form-control" /> </div>
                <div class="form-group">
                    <label for="lastname">Modifier le nom : </label>
                    <textarea id="content" value="<?= $garage['lastname'] ?>" type="text" name="lastname" class="form-control"><?= $garage['lastname'] ?></textarea></div>
                <div class="form-group">
                    <label for="address">Modifier l'adresse : </label>
                    <textarea id="content" value="<?= $garage['address'] ?>" type="text" name="address" class="form-control"><?= $garage['address'] ?></textarea></div>
                <div class="form-group">
                    <label for="email">Modifier l'email : </label>
                    <textarea id="content" value="<?= $garage['email'] ?>" type="text" name="email" class="form-control"><?= $garage['email'] ?></textarea></div>
                <div class="form-group">
                    <label for="phone">Modifier le numéro de téléphone : </label>
                    <textarea id="phone" name="phone" value="<?= $garage['phone'] ?>" class="form-control"><?= $garage['phone'] ?></textarea></div>
                <div class="form-group">
                    <label for="reservedmeters">Modifier le nombre de mètres réservés : </label>
                    <textarea id="reservedmeters" name="reservedmeters" value="<?= $garage['reservedmeters'] ?>" class="form-control"><?= $garage['reservedmeters'] ?></textarea></div>
                <div class="form-group">
                    <label for="adhesion">Modifier l'adhesion : </label>
                    <textarea id="adhesion" name="adhesion" value="<?= $garage['adhesion'] ?>" class="form-control"><?= $garage['adhesion'] ?></textarea></div>
                <div class="form-group">
                    <label for="amount">Modifier le montant : </label>
                    <textarea id="amount" name="amount" value="<?= $garage['amount'] ?>" class="form-control"><?= $garage['amount'] ?></textarea></div>
                <div class="form-group">
                    <label for="total_amount_paid">Modifier le montant déjà payé : </label>
                    <textarea id="total_amount_paid" name="total_amount_paid" value="<?= $garage['total_amount_paid'] ?>" class="form-control"><?= $garage['total_amount_paid'] ?></textarea></div>
                <div class="form-group">
                    <button class="btn btn-warning" name="editGarage">Modifier la ligne</button>
                </div>
            </form>
            <?php $this->stop('main_content') ?>