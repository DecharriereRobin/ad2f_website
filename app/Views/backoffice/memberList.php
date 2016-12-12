<?php $this->layout('layoutBack', ['title' => 'Liste des membres']) ?>

<?php $this->start('main_content') ?>

<?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
<?php unset($_SESSION['message']); ?>

<?php
    echo '<h3>Nombre d\'adhérents à l\'association : '.  $sum .'</h3>';

?>
<a href="<?= $this->url('backoffice_MemberCreate') ?>" class="btn btn-primary">Créer un membre</a>
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
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->
    
<?php
    foreach($members as $member){
?>
    <tr>
        <td><?= ucfirst($member['firstname'])      ?></td>
        <td><?= ucfirst($member['lastname'])       ?></td>
        <td><?= ucfirst($member['address'])        ?></td>
        <td><?= $member['phone']                   ?></td>
        <td><?= $member['email']                   ?></td>
        <td><?= (new \DateTime($member['creation_date']))->format('d-m-Y'); ?></td>
        <td><?= (new \DateTime($member['subscription_date']))->format('d-m-Y');      ?></td>
        <td><?= \Model\MemberModel::getPaidStatus($member) ?></td>
        <td>
            <a href="<?= $this->url('backoffice_MemberEdit', ['id' => $member['id']])?>" class="btn btn-primary">Modifier</a>
            <a href="<?= $this->url('backoffice_MemberDelete', ['id' => $member['id']]) ?>" class="btn btn-danger">Supprimer</a>
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
    </tr>
<?php
        
    }
?>
    </tbody>
</table>

<?php $this->stop('main_content') ?>