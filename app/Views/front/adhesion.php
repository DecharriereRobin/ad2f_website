<?php $this->layout('layout', ['title' => 'Adhesion']) ?>

<?php $this->start('main_content') ?>
<h2>Adhérer à l'association<h2>
<p> Une participation forfaitaire de 5€ est demandée par famille</p>
<p> Le paiement se fait en espèces ou par chèque au siège sociale</p>

<form action="<?php $this->url('association_adhesion')?>" method="POST">
    <div class="form-group">
        <label for="firstname">Nom </label>
        <input id="firstname" name="firstname" type="text" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="lastname">Prénom</label>
        <input id="lastname" name="lastname" type="text" class="form-control" >
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

    <button class="btn btn-primary" name="adhesion">Adhérer à l'association</button>
</form>

<?= $message ?>

<?php $this->stop('main_content') ?>
