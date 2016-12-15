<?php $this->layout('layoutBack', ['title' => 'Liste des membres']) ?>

<?php $this->start('main_content') ?>

<?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
<?php unset($_SESSION['message']); ?>

<?php
    echo '<h3>Nombre d\'adhérents à l\'association : '.  $sum .'</h3>';

?>
<a href="<?= $this->url('backoffice_MemberCreate') ?>" class="btn btn-primary">Créer un membre</a>
<table class="table table-hover table-striped">

    <caption><h4 class="text-center">Informations sur les adhérents de l'association</h4></caption>

    <thead> <!-- En-tête du tableau -->
    <tr>
        <th><a href="" data-toggle="tooltip" data-placement="top" title="Cliquez pour trier par nom">Nom</a></th>
        <th>Prénom</th>
        <th class="text-center">Adresse</th>
        <th class="text-center">Téléphone</th>
        <th class="text-center">Email</th>
        <th class="text-center">Inscription</th>
        <th class="text-center">Paiement</th>
        <th>Date de paiement</th>
        <th><!-- Vide --></th>
        <th><!-- Vide --></th>
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->
    
<?php
    foreach($members as $member){
?>
    <tr>
        <td style="padding-top: 1.5%"><?= ucfirst($member['firstname'])      ?></td>
        <td style="padding-top: 1.5%"><?= ucfirst($member['lastname'])       ?></td>
        <td style="padding-top: 1.5%"><?= ucfirst($member['address'])        ?></td>
        <td style="padding-top: 1.5%"><?= $member['phone']                   ?></td>
        <td style="padding-top: 1.5%" class="text-center"><?= $member['email']                   ?></td>
        <td style="padding-top: 1.5%"><?= (new \DateTime($member['creation_date']))->format('d-m-Y'); ?></td>
        <td><?= \Model\MemberModel::getPaidStatus($member) ?></td>
        <td style="padding-top: 1.5%" ="td_padding_top"><?= (new \DateTime($member['subscription_date']))->format('d-m-Y'); ?></td>
        <td>
            <a href="<?= $this->url('backoffice_MemberEdit', ['id' => $member['id']])?>" class="btn btn-primary">Modifier
            </a>
        </td>
        <td>
            <a href="<?= $this->url('backoffice_MemberDelete', ['id' => $member['id']]) ?>" class="btn btn-danger">Supprimer
            </a>
        </td>
    <tr>
           
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
