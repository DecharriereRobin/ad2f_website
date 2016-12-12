<<<<<<< HEAD
<?php $this->layout('layoutBack', ['title' => 'Liste des  admins']) ?>

<?php $this->start('main_content') ?>

<table class="table table-striped">
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
        <td><a href="<?= $this->url('backoffice_AdminDelete', ['id' => $admin['id']]) ?>">supprimer</a></td>
        <td><a href="<?= $this->url('backoffice_AdminEdit', ['id' => $admin['id']]) ?>">Editer</a></td>
    </tr>

<?php
    }
?>
    </tbody>
</table>

=======
<?php $this->layout('layout', ['title' => 'Liste des  admins']) ?>

<?php $this->start('main_content') ?>




<?php foreach($admins as $admin){ ?>

           <?= $admin['id'] ?>
           <?= $admin['lastname'] ?>
           <?= $admin['firstname'] ?>
           <?= $admin['lastname'] ?>
           <?= $admin['email'] ?>
           <a href="<?= $this->url('backoffice_AdminDelete', ['id' => $admin['id']]) ?>">supprimer-(Penser à créer la confirmation)</a>
           <a href="<?= $this->url('backoffice_AdminEdit', ['id' => $admin['id']]) ?>">Editer</a>
           <?= "</br>" ?>
 <?php } ?>
>>>>>>> 48bc55b28745d2069a27cc8b5cc60cb7d0fcc92f

  <a href="<?= $this->url('backoffice_AdminCreate') ?>">Ajouter un nouveau membre du CA</a>

<?php $this->stop('main_content') ?>
