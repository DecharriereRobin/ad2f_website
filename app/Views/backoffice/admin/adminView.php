
<?php $this->layout('layoutBack', ['title' => 'Liste des  administrateurs du site']) ?>

<?php $this->start('main_content') ?>

    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped table-responsive">
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
        <td><a href="<?= $this->url('backoffice_AdminDelete', ['id' => $admin['id']]) ?>" class="center-block btn btn-success">supprimer</a></td>
        <td><a href="<?= $this->url('backoffice_AdminEdit', ['id' => $admin['id']]) ?>" class="center-block btn btn-success">Editer</a></td>
    </tr>
<?php
    }
?>
    </tbody>
            </table>
        </div>
    </div>


  <a href="<?= $this->url('backoffice_AdminCreate') ?>" class="center-block btn btn-success col-sm-push-3 col-sm-4">Ajouter un nouveau membre du CA</a>

<?php $this->stop('main_content') ?>
