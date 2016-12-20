<?php $this->layout('layoutBack', ['title' => 'Creer un membre']) ?>
    <?php $this->start('main_content') ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                    <?php if(!empty($errorMessages)){
    echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
}?>
                        <?= $message ?>
                            <form class="form-horizontal" action="<?php $this->url('backoffice_MemberCreate')?>" method="POST">
                               <button type="button" onclick="window.location.href =' <?= $this->url('backoffice_MemberList') ?>'" class="btn btn-info btn-sm center-block">Retour à la liste des adhérents</button><br>
                                <div class="text-center form-group">
                                    <label for="name">Nom</label>
                                    <input id="name" name="firstname" type="text" class="text-center form-control" placeholder="Nom" /> </div>
                                <div class="text-center form-group">
                                    <label for="prenom">Prénom</label>
                                    <input id="prenom" name="lastname" type="text" class="text-center form-control" placeholder="Prénom" /> </div>
                                <div class="text-center form-group">
                                    <label for="address">Adresse</label>
                                    <input id="address" name="address" class="text-center form-control" placeholder="Adresse"> </div>
                                <div class="text-center form-group">
                                    <label for="phone">Téléphone</label>
                                    <input id="phone" name="phone" type="text" class="text-center form-control" placeholder="Téléphone" /> </div>
                                <div class="text-center form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="text-center form-control" placeholder="Email" /> </div>
                                <fieldset class="form-group">
                                    <legend>Cotisation</legend>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="payment_status" id="paid" value="1"> Cotisation payée </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="payment_status" id="not_paid" value="0" checked> Cotisation en attente </label>
                                    </div>
                                </fieldset>
                                <button placeholder="Ajouter" class="btn btn-primary btn-sm center-block" name="createMember">Créer le membre</button>
                            </form>
                </div>
            </div>
        </div>
        <?php $this->stop('main_content') ?>