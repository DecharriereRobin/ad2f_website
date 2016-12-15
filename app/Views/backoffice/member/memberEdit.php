<?php $this->layout('layoutBack', ['title' => 'Modifier le membre : '.ucfirst($member['firstname']).' '.ucfirst($member['lastname'])]) ?>

<?php $this->start('main_content') ?>

<!-- Return Modification message On success Or Error-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-push-3 col-sm-4">
            <?= $message ?>
        </div>
     </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-push-3 col-sm-4">
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
                    <div class="row">
                            <?= \Model\MemberModel::getPaidStatus($member) ?>
                        <button class="btn btn-success col-lg-push-1 col-lg-5" name="validatePayment" style="margin-right: 2%">Valider Paiement</button>
                        <button class="btn btn-danger col-lg-push-1 col-lg-5"  name="cancelPayment">Annuler Paiement</button>
                    </div>
                </div>

<div class="container-fluid">
                    <div class="row">
                        <button class="btn btn-primary col-lg-push-2 col-lg-8" name="editMember">Valider les modifications</button>
                    </div>

            </form>
        </div>
    </div> <!-- row -->
</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>


