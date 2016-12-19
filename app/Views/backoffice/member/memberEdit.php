<?php $this->layout('layoutBack', ['title' => 'Modifier le membre : '.ucfirst($member['firstname']).' '.ucfirst($member['lastname'])]) ?>
    <?php $this->start('main_content') ?>
        <!-- Return Modification message On success Or Error-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                        <?= $message ?>
                        <form action="<?php $this->url('backoffice_MemberEdit', ['id' => $member['id']])?>" method="POST">
                            <div class="form-group">
                                <label for="firstname">Modifier le nom: </label>
                                <input id="firstname" name="firstname" type="text" class="form-control" value="<?= $member['firstname']?> " /> </div>
                            <div class="form-group">
                                <label for="lastname">Modifier le prénom: </label>
                                <input id="lastname" name="lastname" type="text" class="form-control" value="<?= $member['lastname']?> " /> </div>
                            <div class="form-group">
                                <label for="address">Modifier l'adresse: </label>
                                <input id="address" name="address" type="text" class="form-control" value="<?= $member['address']?> " /> </div>
                            <div class="form-group">
                                <label for="phone">Modifier le téléphone</label>
                                <input type="text" id="phone" name="phone" class="form-control" value="<?= $member['phone']?>" /> </div>
                            <div class="form-group">
                                <label for="email">Modifier l 'email </label>
                                <input id="email" name="email" type="text" class="form-control" value="<?= $member['email'] ?>" /> </div>
                            <div class="form-group">
                               <div class="form-group">
                                <div class="row">
                                    <?= \Model\MemberModel::getPaidStatus($member) ?>
                                        <br>
                                        <button class="btn btn-success btn-sm col-lg-push-1 col-lg-5" name="validatePayment" style="margin-right: 2%">Valider Paiement</button>
                                        <button class="btn btn-danger btn-sm col-lg-push-1 col-lg-5" name="cancelPayment">Annuler Paiement</button>
                                </div>
                            </div></div>
                            <button class="btn btn-primary btn-sm col-lg-push-2 col-lg-8" name="editMember">Valider les modifications</button>
                        </form>
                    
                </div>
                <!-- row -->
            </div>
            <!-- container-fluid -->
            <?php $this->stop('main_content') ?>