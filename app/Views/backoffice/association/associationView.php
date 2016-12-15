<?php $this->layout('layoutBack', ['title' => 'Profil de l association']) ?>

<?php $this->start('main_content') ?>

<table class="table table-striped">
    <caption>Informations sur l'association</caption>
    <thead> <!-- En-tête du tableau -->
    <tr>

        <th>Nom</th>
        <th>Adresse</th>
        <th>Code postale</th>
        <th>Ville</th>
        <th>telephone</th>
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->

<?php foreach($associations as $association){ ?>
    <tr>
        <td><?php echo ucfirst($association['name'])               ?></td>
        <td><?php echo ($association['address'])                ?></td>
        <td><?php echo ($association['ZIP_code'])                 ?></td>
        <td><?php echo ucfirst($association['city'])                   ?></td>
        <td><?php echo ucfirst($association['phone'])                   ?></td>
        <td><a href="<?= $this->url('backoffice_AssociationEdit', ['id' => $association['id']]) ?>">Editer</a></td>
    </tr>

<?php
    }
?>
    </tbody>
</table>

<?php $this->stop('main_content') ?>
