<?php $this->layout('layoutBack', ['title' => 'Creer un membre']) ?>

<?php $this->start('main_content') ?>

<?= $message ?>

<form action="<?php $this->url('backoffice_MemberCreate')?>" method="POST">
    <div class="form-group">
        <label for="name">Nom </label>
        <input id="name" name="firstname" type="text" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input id="prenom" name="lastname" type="text" class="form-control" >
    </div>
    <div class="form-group">
        <label for="address">Adresse</label>
        <input id="address" name="address" class="form-control">
    </div>
    <div class="form-group">
        <label for="phone">Téléphone</label>
        <input id="phone" name="phone" type="text" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" class="form-control"/>
    </div>
    <!--
    <fieldset class="form-group">
        <legend>Cotisation</legend>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="payment_status" id="paid" value="paid">
                Cotisation payée
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="payment_status" id="not_paid" value="not_paid" checked>
                Cotisation en attente
            </label>
        </div>
    </fieldset>
    -->
    <button class="btn btn-primary" name="createMember">Créer le membre</button>
</form>

<?php $this->stop('main_content') ?>

