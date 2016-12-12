<?php $this->layout('layoutBack', ['title' => 'Modifier le membre : '.ucfirst($member['firstname']).' '.ucfirst($member['lastname'])]) ?>

<?php $this->start('main_content') ?>

<!-- Return Modification message On success Or Error-->
<? $message ?>
<form action="<?php $this->url('backoffice_MemberEdit', ['id' => $member['id']])?>" method="POST">
    <div class="form-group">
        <label for="firstname">Modifier le nom: </label>
        <input id="firstname" name="firstname" type="text" class="form-control" value="<?= $member['firstname']?> " />
    </div><div class="form-group">
        <label for="lastname">Modifier le prénom: </label>
        <input id="lastname" name="lastname" type="text" class="form-control" value="<?= $member['lastname']?> " />
    </div><div class="form-group">
        <label for="address">Modifier l'adresse: </label>
        <input id="address" name="address" type="text" class="form-control" value="<?= $member['address']?> " />
    </div>
    <div class="form-group">
        <label for="phone">Modifier le téléphone</label>
        <input type="text" id="phone" name="phone" class="form-control" value="<?= $member['phone']?>"/>
    </div>
    <div class="form-group">
        <label for="email">Modifier l 'email </label>
        <input id="email" name="email" type="text" class="form-control" value="<?= $member['email'] ?>" />
    </div>
    <div class="form-group">
        <?= \Model\MemberModel::getPaidStatus($member) ?>
        <div>
            <button class="btn btn-success" name="validatePayment">Valider Paiement</button>
            <button class="btn btn-danger"  name="cancelPayment">Annuler Paiement</button>
        </div>
    </div>
    <button class="btn btn-primary" name="editMember">Valider les modifications</button>
</form>

<?php $this->stop('main_content') ?>


