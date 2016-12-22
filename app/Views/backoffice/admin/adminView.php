
<?php $this->layout('layoutBack', ['title' => 'Liste des  admins']) ?>

<?php $this->start('main_content') ?>

<?= $message =""?>
<table class="table table-hovertable-striped">
    <caption>Informations sur les membres du CA de l'association</caption>

    <thead> <!-- En-tête du tableau -->
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Rôle</th>
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->

<?php foreach($admins as $admin){ ?>
    <tr>
        <td><?php echo ucfirst($admin['lastname'])               ?></td>
        <td><?php echo ucfirst($admin['firstname'])                ?></td>
        <td><?php echo ($admin['email'])                 ?></td>
        <td><?php echo ucfirst($admin['role'])                   ?></td>
        <td>
            <a href="<?= $this->url('backoffice_AdminEdit', ['id' => $admin['id']])?>" class="btn btn-primary">Modifier</a>
           <!-- <a href="" class="btn btn-danger">Supprimer</a>-->
            <button class="btn btn-danger" type="button"  data-toggle="modal" data-target="#deleteModal-<?= $admin['id'] ?>">Supprimer</button>
            <div class="modal fade" id="deleteModal-<?= $admin['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-<?= $admin['id'] ?>">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="deleteModalLabel-<?= $admin['id'] ?>">Supprimer l'administrateur: <?= ucfirst($admin['lastname'] . ' ' . $admin['firstname']) ?></h4>
                    </div>
                    <div class="modal-body">
                        Voulez-vous vraiment supprimer l'administrateur ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                        <a href="<?= $this->url('backoffice_AdminDelete', ['id' => $admin['id']]) ?>" class="btn btn-danger">Supprimer l'administrateur</a>
                    </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>

<?php
    } // fin foreach
?>
    </tbody>
</table>

  <a href="<?= $this->url('backoffice_AdminCreate') ?>">Ajouter un nouveau membre du CA</a>

<?php $this->stop('main_content') ?>
