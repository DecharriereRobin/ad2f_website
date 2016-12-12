<?php $this->layout('layoutBack', ['title' => 'Liste des membres']) ?>

<?php $this->start('main_content') ?>

<?php
<<<<<<< HEAD
    echo '<h3>Nombre d\'adhérents à l\'association : '.  $sum .'</h3>';

?>
<a href="<?= $this->url('backoffice_MembersCreate') ?>" class="btn btn-primary">Créer un membre</a>
<table class="table table-hover table-striped">

    <caption>Informations sur les adhérents de l'association</caption>

    <thead> <!-- En-tête du tableau -->
    <tr>
        <th><a href="" data-toggle="tooltip" data-placement="top" title="Cliquez pour trier par nom">Nom</a></th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Date d'inscription</th>
        <th>Date de paiement</th>
        <th>Paiement</th>
=======
    echo '<h3>Liste des réunions : </h3>';

?>

<table class="table table-striped">

    <caption>Liste des réunions</caption>

    <thead> <!-- En-tête du tableau -->
    <tr>
        <th>Date</th>
        <th>Adresse de la réunion</th>
        <th>Sujet de la réunion</th>
>>>>>>> 48bc55b28745d2069a27cc8b5cc60cb7d0fcc92f
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->
    
<?php
<<<<<<< HEAD
    foreach($members as $member){
?>
    <tr>
        <td><?= ucfirst($member['firstname'])               ?></td>
        <td><?= ucfirst($member['lastname'])                ?></td>
        <td><?= ucfirst($member['address'])                 ?></td>
        <td><?= ucfirst($member['phone'])                   ?></td>
        <td><?= ucfirst($member['email'])                   ?></td>
        <td><?= ucfirst($member['creation_date'])           ?></td>
        <td><?= ucfirst($member['subscription_date'])       ?></td>
        <td><?= \Model\MembersModel::getPaidStatus($member) ?></td>
        <td>
            <a href="<?= $this->url('backoffice_MembersEdit', ['id' => $member['id']])?>" class="btn btn-primary">Modifier</a>
            <a href="<?= $this->url('backoffice_MembersDelete', ['id' => $member['id']]) ?>" class="btn btn-danger">Supprimer</a>
            <!--<button class="btn btn-default" data-toggle="modal" data-target="#deleteModal-">Supprimer</button>-->
            <div class="modal fade" id="deleteModal-<?= $member['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-<?= $member['id'] ?>">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="deleteModalLabel-<?= $member['id'] ?>">Êtes-vous sûr de vouloir supprimer ce membre ?</h4>
                        </div>
                        <div class="modal-body">
                            Êtes-vous sûr de vouloir supprimer ce membre ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                            <a href="" class="btn btn-primary">Oui</a>
                        </div>
                    </div>
                </div>
            </div>
        </td>
=======
    foreach($meetings as $meeting){
?>
    <tr>
        <td><?php echo ucfirst($meeting['date'])               ?></td>
        <td><?php echo ucfirst($meeting['address'])                ?></td>
        <td><?php echo ucfirst($meeting['content'])                 ?></td>
>>>>>>> 48bc55b28745d2069a27cc8b5cc60cb7d0fcc92f
    </tr>
<?php
        
    }
?>
    </tbody>
</table>
<<<<<<< HEAD
=======




>>>>>>> 48bc55b28745d2069a27cc8b5cc60cb7d0fcc92f

<?php $this->stop('main_content') ?>
