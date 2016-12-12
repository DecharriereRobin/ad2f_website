<?php $this->layout('layoutBack', ['title' => 'Creer un membre']) ?>

<?php $this->start('main_content') ?>

<?= $message ?>

<form action="<?php $this->url('backoffice_MembersCreate')?>" method="POST">
    <div class="form-group">
        <label for="name">Nom </label>
        <input id="name" name="name" type="text" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input id="prenom" name="prenom" type="text" class="form-control" >
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
    <div class="form-group">
        <label for="paid">Statut de paiement</label>
        <input id="paid" name="paid" type="text" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="creation_date">Date d'inscription</label>
        <input id="creation_date" name="creation_date" type="date" class="form-control calendar"/>
    </div>
    <div class="form-group">
        <?php $dateTime = (new \DateTime('now'))->format('Y-m-d')?>
        <label for="subscription_date">Date de paiement</label>
        <input id="subscription_date" name="subscription_date" type="date" class="form-control" value="<?= $dateTime ?>"/>
    </div>

    <button class="btn btn-primary" name="createMembers">Créer le membre</button>
</form>

<?php $this->stop('main_content') ?>
